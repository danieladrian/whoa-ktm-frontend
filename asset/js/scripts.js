$(document).ready(function() { 
            $(".toggle-deskripsi").click(function() { 
                if ($(".arrow-deskripsi").hasClass("fa-chevron-down")) {
                    $(".arrow-deskripsi").removeClass("fa-chevron-down");
                    $(".arrow-deskripsi").addClass("fa-chevron-up");
                }else{
                    $(".arrow-deskripsi").addClass("fa-chevron-down");
                    $(".arrow-deskripsi").removeClass("fa-chevron-up");
                }
                //alert($("#deskripsi").hasClass("show")); 
            }); 
}); 