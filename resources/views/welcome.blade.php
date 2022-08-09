<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>360&deg; Image</title>
    <meta name="description" content="360&deg; Image - A-Frame">
    <script src="{{asset('jquery/aframe-master.js')}}"></script>
  </head>
  <body>
    <div id="img"> 
    <a-scene>
      <!-- <a-sky src="https://piniteinfo.ikiproductions.com/public/images/InteriorImages/image.jpeg" rotation="0 -130 0"></a-sky> -->
<a-sky src="C:/xampp/htdocs/Design/public/images/InteriorImages/image.jpeg" rotation="0 -130 0"></a-sky>

      <a-text font="kelsonsans" value="" width="6" position="-2.5 0.25 -1.5"
              rotation="0 15 0"></a-text>
    </a-scene>
  </div>
  </body>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript">
  $(document).ready(function() {
    alert('chandu');
  $('#img').click(function(e) {
    var offset = $(this).offset();
    alert(e.pageX - offset.left);
    alert(e.pageY - offset.top);
  });
});

</script>