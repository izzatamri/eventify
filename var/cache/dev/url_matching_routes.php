<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/2fa' => [[['_route' => '2fa_login', '_controller' => 'scheb_two_factor.form_controller::form'], null, null, null, false, false, null]],
        '/2fa_check' => [[['_route' => '2fa_login_check'], null, null, null, false, false, null]],
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/events' => [[['_route' => 'app_admin_events_index', '_controller' => 'App\\Controller\\Admin\\EventController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/service-providers' => [[['_route' => 'app_admin_service_provider_index', '_controller' => 'App\\Controller\\Admin\\ServiceProviderController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/service-providers/create' => [[['_route' => 'app_admin_service_provider_create', '_controller' => 'App\\Controller\\Admin\\ServiceProviderController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users' => [[['_route' => 'app_admin_users_index', '_controller' => 'App\\Controller\\Admin\\UserManagementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users/new' => [[['_route' => 'app_admin_users_new', '_controller' => 'App\\Controller\\Admin\\UserManagementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users/stats' => [[['_route' => 'app_admin_users_stats', '_controller' => 'App\\Controller\\Admin\\UserManagementController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users/export/csv' => [[['_route' => 'app_admin_users_export_csv', '_controller' => 'App\\Controller\\Admin\\UserManagementController::exportCsv'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users/export/pdf' => [[['_route' => 'app_admin_users_export_pdf', '_controller' => 'App\\Controller\\Admin\\UserManagementController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/verify-email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\EmailVerificationController::verify'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/verify-email/resend' => [[['_route' => 'app_verify_email_resend', '_controller' => 'App\\Controller\\EmailVerificationController::resend'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, false, false, null]],
        '/events' => [[['_route' => 'app_events', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, false, false, null]],
        '/myevents' => [[['_route' => 'app_my_events', '_controller' => 'App\\Controller\\EventController::myEvents'], null, ['GET' => 0], null, false, false, null]],
        '/create' => [[['_route' => 'app_event_create', '_controller' => 'App\\Controller\\EventController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/orders' => [[['_route' => 'app_orders_index', '_controller' => 'App\\Controller\\OrderController::index'], null, ['GET' => 0], null, false, false, null]],
        '/event-schedule' => [[['_route' => 'app_event_schedule', '_controller' => 'App\\Controller\\PageController::eventSchedule'], null, ['GET' => 0], null, false, false, null]],
        '/event-details' => [[['_route' => 'app_event_single', '_controller' => 'App\\Controller\\PageController::eventSingle'], null, ['GET' => 0], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_password_reset_request', '_controller' => 'App\\Controller\\PasswordResetController::request'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/profile/change-password' => [[['_route' => 'app_profile_change_password', '_controller' => 'App\\Controller\\ProfileController::changePassword'], null, ['POST' => 0], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/admin/back' => [[['_route' => 'app_back_reclamation', '_controller' => 'App\\Controller\\ReclamationController::backOffice'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reponse/new' => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/services' => [[['_route' => 'app_services_catalog', '_controller' => 'App\\Controller\\ServiceCatalogController::catalog'], null, ['GET' => 0], null, false, false, null]],
        '/create-checkout-session' => [[['_route' => 'app_stripe_create_checkout_session', '_controller' => 'App\\Controller\\StripeCheckoutController::createCheckoutSession'], null, ['POST' => 0], null, false, false, null]],
        '/payment/success' => [[['_route' => 'app_stripe_payment_success', '_controller' => 'App\\Controller\\StripeCheckoutController::paymentSuccess'], null, ['GET' => 0], null, false, false, null]],
        '/payment/cancel' => [[['_route' => 'app_stripe_payment_cancel', '_controller' => 'App\\Controller\\StripeCheckoutController::paymentCancel'], null, ['GET' => 0], null, false, false, null]],
        '/venues/from-map' => [[['_route' => 'app_venue_from_map', '_controller' => 'App\\Controller\\VenueController::fromMap'], null, ['POST' => 0], null, false, false, null]],
        '/reglement' => [[['_route' => 'app_reglement', '_controller' => 'App\\Controller\\ReglementController::index'], null, null, null, false, false, null]],
        '/reglement/qrcode' => [[['_route' => 'app_reglement_qrcode', '_controller' => 'App\\Controller\\ReglementController::qrcode'], null, null, null, false, false, null]],
        '/reglement/pdf' => [[['_route' => 'app_reglement_pdf', '_controller' => 'App\\Controller\\ReglementController::generatePdf'], null, null, null, false, false, null]],
        '/reglement/pdf/view' => [[['_route' => 'app_reglement_pdf_view', '_controller' => 'App\\Controller\\ReglementController::viewPdf'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|events/(\\d+)/ban(*:228)'
                    .'|service\\-providers/(?'
                        .'|(\\d+)/edit(*:268)'
                        .'|(\\d+)(*:281)'
                    .')'
                    .'|users/(?'
                        .'|(\\d+)/edit(*:309)'
                        .'|(\\d+)/toggle\\-active(*:337)'
                        .'|(\\d+)/delete(*:357)'
                    .')'
                .')'
                .'|/(\\d+)/tickets(*:381)'
                .'|/(\\d+)/tickets/(\\d+)/edit(*:414)'
                .'|/(\\d+)/tickets/(\\d+)/delete(*:449)'
                .'|/(\\d+)/publish(*:471)'
                .'|/(\\d+)(*:485)'
                .'|/(\\d+)/edit(*:504)'
                .'|/(\\d+)/delete(*:525)'
                .'|/orders/(?'
                    .'|c(?'
                        .'|reate/(\\d+)(*:559)'
                        .'|heckout/(\\d+)(*:580)'
                    .')'
                    .'|event/(\\d+)(*:600)'
                    .'|(\\d+)/ticket\\.pdf(*:625)'
                    .'|(\\d+)(*:638)'
                    .'|(\\d+)/status(*:658)'
                .')'
                .'|/re(?'
                    .'|set\\-password/confirm/([^/]++)(*:703)'
                    .'|clamation/([^/]++)(?'
                        .'|(*:732)'
                        .'|/edit(*:745)'
                        .'|(*:753)'
                    .')'
                    .'|ponse/([^/]++)(?'
                        .'|(*:779)'
                        .'|/edit(*:792)'
                        .'|(*:800)'
                    .')'
                .')'
                .'|/qrcodes/([0-9a-fA-F\\-]{36})\\.png(*:843)'
                .'|/event(?'
                    .'|/(?'
                        .'|(\\d+)/service\\-bookings(*:887)'
                        .'|(\\d+)/service\\-bookings/create(*:925)'
                        .'|(\\d+)/service\\-bookings/(\\d+)(*:962)'
                        .'|(\\d+)/service\\-bookings/(\\d+)/edit(*:1004)'
                        .'|(\\d+)/service\\-bookings/(\\d+)(*:1042)'
                    .')'
                    .'|s/(?'
                        .'|(\\d+)/sponsors(*:1071)'
                        .'|(\\d+)/sponsors/new(*:1098)'
                        .'|(\\d+)/sponsors/(\\d+)/edit(*:1132)'
                        .'|(\\d+)/sponsors/(\\d+)/accept(*:1168)'
                        .'|(\\d+)/sponsors/(\\d+)/refuse(*:1204)'
                        .'|(\\d+)/sponsors/(\\d+)/delete(*:1240)'
                        .'|(\\d+)/sponsor\\-request/(\\d+)(*:1277)'
                        .'|(\\d+)/packages(*:1300)'
                        .'|(\\d+)/packages/new(*:1327)'
                        .'|(\\d+)/packages/(\\d+)/edit(*:1361)'
                        .'|(\\d+)/packages/(\\d+)/delete(*:1397)'
                    .')'
                .')'
                .'|/ticket/validate/([^/]++)(*:1433)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        228 => [[['_route' => 'app_admin_events_ban', '_controller' => 'App\\Controller\\Admin\\EventController::ban'], ['id'], ['POST' => 0], null, false, false, null]],
        268 => [[['_route' => 'app_admin_service_provider_edit', '_controller' => 'App\\Controller\\Admin\\ServiceProviderController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        281 => [[['_route' => 'app_admin_service_provider_delete', '_controller' => 'App\\Controller\\Admin\\ServiceProviderController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        309 => [[['_route' => 'app_admin_users_edit', '_controller' => 'App\\Controller\\Admin\\UserManagementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        337 => [[['_route' => 'app_admin_users_toggle_active', '_controller' => 'App\\Controller\\Admin\\UserManagementController::toggleActive'], ['id'], ['POST' => 0], null, false, false, null]],
        357 => [[['_route' => 'app_admin_users_delete', '_controller' => 'App\\Controller\\Admin\\UserManagementController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        381 => [[['_route' => 'app_event_tickets', '_controller' => 'App\\Controller\\EventController::tickets'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        414 => [[['_route' => 'app_ticket_edit', '_controller' => 'App\\Controller\\EventController::ticketEdit'], ['id', 'ticketId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        449 => [[['_route' => 'app_ticket_delete', '_controller' => 'App\\Controller\\EventController::ticketDelete'], ['id', 'ticketId'], ['POST' => 0], null, false, false, null]],
        471 => [[['_route' => 'app_event_publish', '_controller' => 'App\\Controller\\EventController::publish'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        485 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        504 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        525 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        559 => [[['_route' => 'app_order_create', '_controller' => 'App\\Controller\\OrderController::create'], ['eventId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        580 => [[['_route' => 'app_order_checkout', '_controller' => 'App\\Controller\\OrderController::checkout'], ['eventId'], ['POST' => 0], null, false, true, null]],
        600 => [[['_route' => 'app_orders_event', '_controller' => 'App\\Controller\\OrderController::eventOrders'], ['id'], ['GET' => 0], null, false, true, null]],
        625 => [[['_route' => 'app_order_ticket_pdf', '_controller' => 'App\\Controller\\OrderController::ticketPdf'], ['id'], ['GET' => 0], null, false, false, null]],
        638 => [[['_route' => 'app_order_show', '_controller' => 'App\\Controller\\OrderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        658 => [[['_route' => 'app_order_status', '_controller' => 'App\\Controller\\OrderController::updateStatus'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        703 => [[['_route' => 'app_password_reset_confirm', '_controller' => 'App\\Controller\\PasswordResetController::confirm'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        732 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        745 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        753 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        779 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        792 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        800 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        843 => [[['_route' => 'app_qrcode_serve', '_controller' => 'App\\Controller\\QrCodeController::serve'], ['uuid'], ['GET' => 0], null, false, false, null]],
        887 => [[['_route' => 'app_service_booking_index', '_controller' => 'App\\Controller\\ServiceBookingController::index'], ['eventId'], ['GET' => 0], null, false, false, null]],
        925 => [[['_route' => 'app_service_booking_create', '_controller' => 'App\\Controller\\ServiceBookingController::create'], ['eventId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        962 => [[['_route' => 'app_service_booking_show', '_controller' => 'App\\Controller\\ServiceBookingController::show'], ['eventId', 'id'], ['GET' => 0], null, false, true, null]],
        1004 => [[['_route' => 'app_service_booking_edit', '_controller' => 'App\\Controller\\ServiceBookingController::edit'], ['eventId', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1042 => [[['_route' => 'app_service_booking_delete', '_controller' => 'App\\Controller\\ServiceBookingController::delete'], ['eventId', 'id'], ['POST' => 0], null, false, true, null]],
        1071 => [[['_route' => 'app_sponsor_index', '_controller' => 'App\\Controller\\SponsorController::index'], ['id'], ['GET' => 0], null, false, false, null]],
        1098 => [[['_route' => 'app_sponsor_new', '_controller' => 'App\\Controller\\SponsorController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1132 => [[['_route' => 'app_sponsor_edit', '_controller' => 'App\\Controller\\SponsorController::edit'], ['id', 'sponsorId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1168 => [[['_route' => 'app_sponsor_accept', '_controller' => 'App\\Controller\\SponsorController::accept'], ['id', 'sponsorId'], ['POST' => 0], null, false, false, null]],
        1204 => [[['_route' => 'app_sponsor_refuse', '_controller' => 'App\\Controller\\SponsorController::refuse'], ['id', 'sponsorId'], ['POST' => 0], null, false, false, null]],
        1240 => [[['_route' => 'app_sponsor_delete', '_controller' => 'App\\Controller\\SponsorController::delete'], ['id', 'sponsorId'], ['POST' => 0], null, false, false, null]],
        1277 => [[['_route' => 'app_sponsor_request_submit', '_controller' => 'App\\Controller\\SponsorRequestController::submit'], ['id', 'packageId'], ['POST' => 0], null, false, true, null]],
        1300 => [[['_route' => 'app_sponsorship_package_index', '_controller' => 'App\\Controller\\SponsorshipPackageController::index'], ['id'], ['GET' => 0], null, false, false, null]],
        1327 => [[['_route' => 'app_sponsorship_package_new', '_controller' => 'App\\Controller\\SponsorshipPackageController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1361 => [[['_route' => 'app_sponsorship_package_edit', '_controller' => 'App\\Controller\\SponsorshipPackageController::edit'], ['id', 'packageId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1397 => [[['_route' => 'app_sponsorship_package_delete', '_controller' => 'App\\Controller\\SponsorshipPackageController::delete'], ['id', 'packageId'], ['POST' => 0], null, false, false, null]],
        1433 => [
            [['_route' => 'app_ticket_validate', '_controller' => 'App\\Controller\\TicketValidationController::validate'], ['uuid'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
