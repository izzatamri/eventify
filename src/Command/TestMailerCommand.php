<?php

declare(strict_types=1);

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[AsCommand(
    name: 'app:mailer:test',
    description: 'Send a test email to verify Gmail SMTP configuration',
)]
class TestMailerCommand extends Command
{
    public function __construct(
        private readonly MailerInterface $mailer,
        private readonly string $mailerFrom,
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('to', InputArgument::OPTIONAL, 'Email address to send the test to (default: MAILER_FROM)');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $to = $input->getArgument('to') ?: $this->mailerFrom;

        if ($to === '' || $to === 'noreply@eventify.local') {
            $io->warning('No recipient. Set MAILER_FROM in .env or run: php bin/console app:mailer:test your@email.com');
            return Command::FAILURE;
        }

        $io->info(sprintf('Sending test email to %s via %s...', $to, $this->mailerFrom));

        try {
            $email = (new Email())
                ->from($this->mailerFrom)
                ->to($to)
                ->subject('Eventify – test email')
                ->text("This is a test email from Eventify.\n\nIf you received this, Gmail SMTP is working.");
            $this->mailer->send($email);
            $io->success('Test email sent. Check the inbox (and spam) for the message.');
            return Command::SUCCESS;
        } catch (\Throwable $e) {
            $io->error('Failed to send email: ' . $e->getMessage());
            $output->writeln('');
            $output->writeln('<comment>Common causes:</comment>');
            $output->writeln('  • MAILER_DSN uses normal Gmail password instead of an App Password');
            $output->writeln('  • 2-Step Verification not enabled on the Google account');
            $output->writeln('  • App Password revoked or incorrect');
            $output->writeln('  • Less secure app access / firewall blocking SMTP');
            return Command::FAILURE;
        }
    }
}
