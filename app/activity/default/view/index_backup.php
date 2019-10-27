<!DOCTYPE html>
<html>
  <head>
      <?php
        View::make("include/meta")->flush();
        View::make("include/css")->flush();
        View::make("include/js")->flush();
      ?>
    <title>
	<?="Daniel Adrian - ".$title?>
	</title>
  </head>
  <body <?=$background?>>
    <?=$content?>
    
  </body>
  

  <script>
$(document).ready(function () {
      window.scrollTo(0,0);
      var timelineBlocks = $('.timeline-block'),
        offset = 1;

      //hide timeline blocks which are outside the viewport
      $('.buble').addClass('bounce-in');
      $('.timeline-content').addClass('bounce-in');
      hideBlocks(timelineBlocks, offset);
      //on scolling, show/animate timeline blocks when enter the viewport
      $(window).on('scroll', function(){
        (!window.requestAnimationFrame)
          ? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
          : window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
      });

      function hideBlocks(blocks, offset) {
        blocks.each(function(){
          ( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.buble, .timeline-content').addClass('is-hidden').removeClass('bounce-in');
        });
      }

      function showBlocks(blocks, offset) {
        blocks.each(function(){
          ( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.buble').hasClass('is-hidden') ) && $(this).find('.buble, .timeline-content').removeClass('is-hidden').addClass('bounce-in');
        });
      }


  });
  
      


</script>
</html>
