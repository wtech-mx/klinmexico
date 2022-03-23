        $(document).ready(function () {

            var current_fs, next_fs, previous_fs;

            $(".next").click(function () {

                str1 = "next1";
                str2 = "next2";
                str3 = "next3";

                    current_fs = $(this).parent().parent();
                    next_fs = $(this).parent().parent().next();

                    $(current_fs).removeClass("show");
                    $(next_fs).addClass("show");

                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active_steps");

                    current_fs.animate({}, {
                        step: function () {

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });

                            next_fs.css({
                                'display': 'block'
                            });
                        }
                    });

            });

            $(".prev").click(function () {

                current_fs = $(this).parent().parent();
                previous_fs = $(this).parent().parent().prev();

                $(current_fs).removeClass("show");
                $(previous_fs).addClass("show");

                $("#progressbar li").eq($("fieldset").index(next_fs)).removeClass("active_steps");

                current_fs.animate({}, {
                    step: function () {

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });

                        previous_fs.css({
                            'display': 'block'
                        });
                    }
                });
            });


        });
