<script type="text/javascript" src="js/videos.js"></script>
<script type="text/javascript" src="js/sideNav.js"></script>
<script type="text/javascript">
   /*$(document).on('scroll', function() {
      if($(this).scrollTop()>=$('#videoTarget').position().top){
         $('#expandedImg').attr("controls");
      }
   });
   
   window.setInterval(function(){
    	var video = document.getElementById('expandedImg');
   var curtime = video.currentTime;
   }, 5000);*/
   
</script>
<script src="js/materialize.min.js"></script>
<script type="text/javascript">
	/*$(document).on('scroll', function() {
    if($(this).scrollTop()>=$('#videoTarget').position().top){
       ;
    }
    });*/
    $(document).ready(function(){
        $('.dropdown-trigger').dropdown();
    });	
	</script>
    
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
 //Draggable
 //Up to 6 other folders
  $( function() {
    $("#sortable0, #sortable1, #sortable2, #sortable3, #sortable4, #sortable5").sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();
  } );
  </script>
  <script>
  //Assign names to list items based on list they are in
  $('#editForm').submit(function() {
      $(this).find('li input').each(function(){
         var currentLi = $(this);
         currentLi.attr('name', currentLi.parent().parent().attr('id')+'[]');
     });
     return true;
  });
  </script>
</body>
</html>