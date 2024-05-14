export class Select {

    init() {
        $(document).ready(function () {
            $(".js-select2").select2({
                closeOnSelect: true,
                minimumResultsForSearch: Infinity,
                allowClear: false,
                dropdownCssClass: "categories-select2",
                dropdownParent:$("#downloadModal")
            });
        })
    }
}
