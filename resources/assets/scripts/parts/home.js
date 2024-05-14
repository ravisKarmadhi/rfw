export class Home {
    init() {
        // $(document).ready(function () {
        //     $('#image-section').mouseenter(function () {
        //         $(this).mousemove(function (event) {
        //             var mouseX = event.pageX;
        //             var mouseY = event.pageY;
        //             var sectionOffset = $(this).offset();
        //             var relMouseX = mouseX - sectionOffset.left;
        //             var relMouseY = mouseY - sectionOffset.top;

        //             // Apply transform to each image
        //             $(this).find('img').each(function () {
        //                 var imgWidth = $(this).width();
        //                 var imgHeight = $(this).height();
        //                 var moveX = (imgWidth / 2 - relMouseX) / 5;
        //                 var moveY = (imgHeight / 2 - relMouseY) / 5;

        //                 // Apply transform
        //                 $(this).css('transform', 'translate(' + moveX + 'px, ' + moveY + 'px)');
        //             });
        //         });
        //     }).mouseleave(function () {
        //         $(this).find('img').css('transform', 'none');
        //     });
        // });

        $(document).ready(function () {
            var section = $('#image-section');
            var images = section.find('img');
            var mouseX, mouseY;

            section.mouseenter(function () {
                $(this).mousemove(function (event) {
                    mouseX = event.pageX;
                    mouseY = event.pageY;
                    requestAnimationFrame(updateImages);
                });
            }).mouseleave(function () {
                images.css('transform', 'none');
            });

            function updateImages() {
                var sectionOffset = section.offset();

                images.each(function () {
                    var img = $(this);
                    var imgWidth = img.width();
                    var imgHeight = img.height();
                    var relMouseX = mouseX - sectionOffset.left;
                    var relMouseY = mouseY - sectionOffset.top;
                    var moveX = (imgWidth / 2 - relMouseX) / 20; // Adjust divisor for effect intensity
                    var moveY = (imgHeight / 2 - relMouseY) / 20; // Adjust divisor for effect intensity

                    // Apply transform
                    img.css('transform', 'translate(' + moveX + 'px, ' + moveY + 'px)');
                });
            }

            $('#close-bottom-home').click(function () {
                $('#bottom-home').addClass('d-none');
            })
        });
    }
}
