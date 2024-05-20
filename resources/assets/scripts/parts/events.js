export class Events {
    init() {
        $(document).ready(function () {
            $('.tribe-events-back a').html('<div class="d-flex align-items-center classic font-18 fw-normal text-2C2924"> <img class="me-2" src="/wp-content/uploads/2024/05/arrow-back.svg" alt=""/> Back To All</div>');
            $('.tribe-events-single-event-title').addClass('classic fw-normal text-2C2924 font-38 text-capitalize');
            $('.tribe-events-schedule').addClass('dmt-30 dmb-50');

            $('.tribe-events-schedule h2 span').addClass('classic fw-normal text-2C2924 font-18 text-uppercase');
            $('.tribe-events-schedule .tribe-events-cost').addClass('classic fw-normal text-2C2924 font-18 text-uppercase');
            $('.tribe-events-single-event-description').addClass('dmt-65 pe-4 ');
            $('.tribe-events-single-event-description p').addClass('col-lg-11 pe-1 classic fw-normal text-16 text-2C2924 leading-28');
            $('.tribe-events-meta-group-organizer').addClass('d-none');
            $('.tribe-events-meta-group-venue').addClass('d-none');
            $('.tribe-events-venue-map').addClass('d-none');
            $('.tribe-events-meta-group-details').addClass('w-100');
            $('.tribe-events-single-section').addClass('w-100');


            $('dl').each(function () {
                $(this).children('dt').each(function () {
                    var $dt = $(this);
                    var $dd = $dt.next('dd');
                    $dt.add($dd).wrapAll('<div class="main-details-row d-flex"></div>');
                });
            });
        });
    }
}
