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
        '/admin/service-providers/verify-siret' => [[['_route' => 'app_admin_service_provider_verify_siret', '_controller' => 'App\\Controller\\Admin\\ServiceProviderController::verifySiret'], null, ['POST' => 0], null, false, false, null]],
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
                        .'|(\\d+)/recalculate\\-score(*:313)'
                    .')'
                    .'|users/(?'
                        .'|(\\d+)/edit(*:341)'
                        .'|(\\d+)/toggle\\-active(*:369)'
                        .'|(\\d+)/delete(*:389)'
                    .')'
                .')'
                .'|/(\\d+)/tickets(*:413)'
                .'|/(\\d+)/tickets/(\\d+)/edit(*:446)'
                .'|/(\\d+)/tickets/(\\d+)/delete(*:481)'
                .'|/(\\d+)/publish(*:503)'
                .'|/(\\d+)(*:517)'
                .'|/(\\d+)/edit(*:536)'
                .'|/(\\d+)/delete(*:557)'
                .'|/orders/(?'
                    .'|c(?'
                        .'|reate/(\\d+)(*:591)'
                        .'|heckout/(\\d+)(*:612)'
                    .')'
                    .'|event/(\\d+)(*:632)'
                    .'|(\\d+)/ticket\\.pdf(*:657)'
                    .'|(\\d+)(*:670)'
                    .'|(\\d+)/status(*:690)'
                .')'
                .'|/re(?'
                    .'|set\\-password/confirm/([^/]++)(*:735)'
                    .'|clamation/([^/]++)(?'
                        .'|(*:764)'
                        .'|/edit(*:777)'
                        .'|(*:785)'
                    .')'
                    .'|ponse/([^/]++)(?'
                        .'|(*:811)'
                        .'|/edit(*:824)'
                        .'|(*:832)'
                    .')'
                .')'
                .'|/provider/(\\d+)/dashboard(*:867)'
                .'|/qrcodes/([0-9a-fA-F\\-]{36})\\.png(*:908)'
                .'|/event(?'
                    .'|/(?'
                        .'|(\\d+)/service\\-bookings(*:952)'
                        .'|(\\d+)/service\\-bookings/create(*:990)'
                        .'|(\\d+)/service\\-bookings/(\\d+)(*:1027)'
                        .'|(\\d+)/service\\-bookings/(\\d+)/edit(*:1070)'
                        .'|(\\d+)/service\\-bookings/(\\d+)/status/(confirmed|completed|cancelled)(*:1147)'
                        .'|(\\d+)/service\\-bookings/(\\d+)(*:1185)'
                    .')'
                    .'|s/(?'
                        .'|(\\d+)/service\\-requests(*:1223)'
                        .'|(\\d+)/service\\-requests/create(*:1262)'
                        .'|(\\d+)/service\\-requests/(\\d+)(*:1300)'
                        .'|(\\d+)/service\\-requests/(\\d+)/publish(*:1346)'
                        .'|(\\d+)/service\\-requests/(\\d+)/close(*:1390)'
                        .'|(\\d+)/service\\-requests/(\\d+)/award/(\\d+)(*:1440)'
                        .'|(\\d+)/service\\-requests/(\\d+)/create\\-booking(*:1494)'
                        .'|(\\d+)/sponsors(*:1517)'
                        .'|(\\d+)/sponsors/new(*:1544)'
                        .'|(\\d+)/sponsors/(\\d+)/edit(*:1578)'
                        .'|(\\d+)/sponsors/(\\d+)/accept(*:1614)'
                        .'|(\\d+)/sponsors/(\\d+)/refuse(*:1650)'
                        .'|(\\d+)/sponsors/(\\d+)/delete(*:1686)'
                        .'|(\\d+)/sponsor\\-request/(\\d+)(*:1723)'
                        .'|(\\d+)/packages(*:1746)'
                        .'|(\\d+)/packages/new(*:1773)'
                        .'|(\\d+)/packages/(\\d+)/edit(*:1807)'
                        .'|(\\d+)/packages/(\\d+)/delete(*:1843)'
                    .')'
                .')'
                .'|/service\\-requests/(?'
                    .'|(\\d+)/proposals(*:1891)'
                    .'|(\\d+)/proposals/create/(\\d+)(*:1928)'
                .')'
                .'|/ticket/validate/([^/]++)(*:1963)'
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
        313 => [[['_route' => 'app_admin_service_provider_recalculate_score', '_controller' => 'App\\Controller\\Admin\\ServiceProviderController::recalculateScore'], ['id'], ['POST' => 0], null, false, false, null]],
        341 => [[['_route' => 'app_admin_users_edit', '_controller' => 'App\\Controller\\Admin\\UserManagementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        369 => [[['_route' => 'app_admin_users_toggle_active', '_controller' => 'App\\Controller\\Admin\\UserManagementController::toggleActive'], ['id'], ['POST' => 0], null, false, false, null]],
        389 => [[['_route' => 'app_admin_users_delete', '_controller' => 'App\\Controller\\Admin\\UserManagementController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        413 => [[['_route' => 'app_event_tickets', '_controller' => 'App\\Controller\\EventController::tickets'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        446 => [[['_route' => 'app_ticket_edit', '_controller' => 'App\\Controller\\EventController::ticketEdit'], ['id', 'ticketId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        481 => [[['_route' => 'app_ticket_delete', '_controller' => 'App\\Controller\\EventController::ticketDelete'], ['id', 'ticketId'], ['POST' => 0], null, false, false, null]],
        503 => [[['_route' => 'app_event_publish', '_controller' => 'App\\Controller\\EventController::publish'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        517 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        536 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        557 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        591 => [[['_route' => 'app_order_create', '_controller' => 'App\\Controller\\OrderController::create'], ['eventId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        612 => [[['_route' => 'app_order_checkout', '_controller' => 'App\\Controller\\OrderController::checkout'], ['eventId'], ['POST' => 0], null, false, true, null]],
        632 => [[['_route' => 'app_orders_event', '_controller' => 'App\\Controller\\OrderController::eventOrders'], ['id'], ['GET' => 0], null, false, true, null]],
        657 => [[['_route' => 'app_order_ticket_pdf', '_controller' => 'App\\Controller\\OrderController::ticketPdf'], ['id'], ['GET' => 0], null, false, false, null]],
        670 => [[['_route' => 'app_order_show', '_controller' => 'App\\Controller\\OrderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        690 => [[['_route' => 'app_order_status', '_controller' => 'App\\Controller\\OrderController::updateStatus'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        735 => [[['_route' => 'app_password_reset_confirm', '_controller' => 'App\\Controller\\PasswordResetController::confirm'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        764 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        777 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        785 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        811 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        824 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        832 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        867 => [[['_route' => 'app_provider_dashboard', '_controller' => 'App\\Controller\\ProviderDashboardController::index'], ['id'], ['GET' => 0], null, false, false, null]],
        908 => [[['_route' => 'app_qrcode_serve', '_controller' => 'App\\Controller\\QrCodeController::serve'], ['uuid'], ['GET' => 0], null, false, false, null]],
        952 => [[['_route' => 'app_service_booking_index', '_controller' => 'App\\Controller\\ServiceBookingController::index'], ['eventId'], ['GET' => 0], null, false, false, null]],
        990 => [[['_route' => 'app_service_booking_create', '_controller' => 'App\\Controller\\ServiceBookingController::create'], ['eventId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1027 => [[['_route' => 'app_service_booking_show', '_controller' => 'App\\Controller\\ServiceBookingController::show'], ['eventId', 'id'], ['GET' => 0], null, false, true, null]],
        1070 => [[['_route' => 'app_service_booking_edit', '_controller' => 'App\\Controller\\ServiceBookingController::edit'], ['eventId', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1147 => [[['_route' => 'app_service_booking_change_status', '_controller' => 'App\\Controller\\ServiceBookingController::changeStatus'], ['eventId', 'id', 'status'], ['POST' => 0], null, false, true, null]],
        1185 => [[['_route' => 'app_service_booking_delete', '_controller' => 'App\\Controller\\ServiceBookingController::delete'], ['eventId', 'id'], ['POST' => 0], null, false, true, null]],
        1223 => [[['_route' => 'app_service_request_index', '_controller' => 'App\\Controller\\ServiceRequestController::index'], ['eventId'], ['GET' => 0], null, false, false, null]],
        1262 => [[['_route' => 'app_service_request_create', '_controller' => 'App\\Controller\\ServiceRequestController::create'], ['eventId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1300 => [[['_route' => 'app_service_request_show', '_controller' => 'App\\Controller\\ServiceRequestController::show'], ['eventId', 'id'], ['GET' => 0], null, false, true, null]],
        1346 => [[['_route' => 'app_service_request_publish', '_controller' => 'App\\Controller\\ServiceRequestController::publish'], ['eventId', 'id'], ['POST' => 0], null, false, false, null]],
        1390 => [[['_route' => 'app_service_request_close', '_controller' => 'App\\Controller\\ServiceRequestController::close'], ['eventId', 'id'], ['POST' => 0], null, false, false, null]],
        1440 => [[['_route' => 'app_service_request_award', '_controller' => 'App\\Controller\\ServiceRequestController::award'], ['eventId', 'id', 'proposalId'], ['POST' => 0], null, false, true, null]],
        1494 => [[['_route' => 'app_service_request_create_booking_from_award', '_controller' => 'App\\Controller\\ServiceRequestController::createBookingFromAward'], ['eventId', 'id'], ['POST' => 0], null, false, false, null]],
        1517 => [[['_route' => 'app_sponsor_index', '_controller' => 'App\\Controller\\SponsorController::index'], ['id'], ['GET' => 0], null, false, false, null]],
        1544 => [[['_route' => 'app_sponsor_new', '_controller' => 'App\\Controller\\SponsorController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1578 => [[['_route' => 'app_sponsor_edit', '_controller' => 'App\\Controller\\SponsorController::edit'], ['id', 'sponsorId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1614 => [[['_route' => 'app_sponsor_accept', '_controller' => 'App\\Controller\\SponsorController::accept'], ['id', 'sponsorId'], ['POST' => 0], null, false, false, null]],
        1650 => [[['_route' => 'app_sponsor_refuse', '_controller' => 'App\\Controller\\SponsorController::refuse'], ['id', 'sponsorId'], ['POST' => 0], null, false, false, null]],
        1686 => [[['_route' => 'app_sponsor_delete', '_controller' => 'App\\Controller\\SponsorController::delete'], ['id', 'sponsorId'], ['POST' => 0], null, false, false, null]],
        1723 => [[['_route' => 'app_sponsor_request_submit', '_controller' => 'App\\Controller\\SponsorRequestController::submit'], ['id', 'packageId'], ['POST' => 0], null, false, true, null]],
        1746 => [[['_route' => 'app_sponsorship_package_index', '_controller' => 'App\\Controller\\SponsorshipPackageController::index'], ['id'], ['GET' => 0], null, false, false, null]],
        1773 => [[['_route' => 'app_sponsorship_package_new', '_controller' => 'App\\Controller\\SponsorshipPackageController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1807 => [[['_route' => 'app_sponsorship_package_edit', '_controller' => 'App\\Controller\\SponsorshipPackageController::edit'], ['id', 'packageId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1843 => [[['_route' => 'app_sponsorship_package_delete', '_controller' => 'App\\Controller\\SponsorshipPackageController::delete'], ['id', 'packageId'], ['POST' => 0], null, false, false, null]],
        1891 => [[['_route' => 'app_service_proposal_index', '_controller' => 'App\\Controller\\ServiceProposalController::index'], ['requestId'], ['GET' => 0], null, false, false, null]],
        1928 => [[['_route' => 'app_service_proposal_create', '_controller' => 'App\\Controller\\ServiceProposalController::create'], ['requestId', 'providerId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1963 => [
            [['_route' => 'app_ticket_validate', '_controller' => 'App\\Controller\\TicketValidationController::validate'], ['uuid'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
