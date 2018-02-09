<?php $i = 1; ?>
<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="caption-container">
      <p contenteditable="true" id="caption" onkeypress="handleKeyPress(event)"></p>
    </div>

    <?php foreach ($images as $image): ?>
    <div class="mySlides">
      <?php echo form_open('media/delete/'.$image->id); ?>
        <input type="hidden" id="image_id" name="image_id" value="<?php echo $image->id; ?>">
        <input type="submit" value="Poista" class="btn btn-danger" onclick="return confirm('Haluatko varmasti poistaa kuvan?')">
      </form>
      <img src="<?php echo base_url(); ?>uploads/images/<?php echo $image->name; ?>" style="width: 100%; height: 65%">
    </div>
    <?php endforeach; ?>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
</div>

<div class="fixed-bar">
  <ul id="carousel" class="elastislide-list">

    <?php foreach ($images as $image): ?>
      <li><a href="#"><img class="demo" src="<?php echo base_url(); ?>uploads/thumbnails/<?php echo $image->name; ?>"  data-id="<?php echo $image->id; ?>" alt="<?php echo $image->text; ?>" onclick="openModal();currentSlide(<?php echo $i++; ?>)"/></a></li>
    <?php endforeach; ?>
  </ul>
</div>

<script type="text/javascript">
function handleKeyPress(e){
  var key=e.keyCode || e.which;
  if (key==13){
     callAjax();
   }
}

function callAjax(){
    var kuvaus = document.getElementById('caption').textContent;
    var image_id = document.getElementById('caption').dataset.id;
    $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>" + "index.php/Media/edit_image_description",
        dataType: 'json',
        data: {desc: kuvaus, id: image_id },
        success: function(result) {
          alert('Muokkaus tallennettu');
          console.log(result);
      }
    });
}
</script>
