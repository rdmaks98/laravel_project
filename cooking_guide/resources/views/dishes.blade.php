@include ('header');
<section id="Dishes" class="description_content">
  <div class="text-content container"> 
    <div class="container">
      <div class="row">
        <div id="w" class="col-sm-12">
        	<div class="col-sm-6">
        			<img src="{{ url('recipies') }}/<?php echo $dishes->r_image ?>" height="300px" width="400px"> 
        	</div>
        	<div class="col-sm-6 recipe-summary"><!-- 
            <div><h2>{{ $dishes->r_name }}</h2></div> -->
              <div class="recipe-details">
                <div class="primary-info-text">
                  <div class="primary-info-left-wrapper">
                    <h1 class="recipe-title font-bold h2-text primary-dark">{{ $dishes->r_name }}</h1>
                    <!-- <a href="#reviews" title="See Reviews" class="recipe-details-rating p2-text primary-orangenn" aria-label="See Reviews">
                      <span class="icon full-star y-icon" data-star-number="1" data-icon=""></span>
                      <span class="icon full-star y-icon" data-star-number="2" data-icon=""></span>
                      <span class="icon full-star y-icon" data-star-number="3" data-icon=""></span>
                      <span class="icon full-star y-icon" data-star-number="4" data-icon=""></span>
                      <span class="icon full-star y-icon" data-star-number="5" data-icon=""></span>
                      <span class="count font-bold micro-text primary-orange">(2)</span>
                    </a> -->
                  </div>
                </div>
                <!-- <div class="review-snippet media"><div class="review-content font-normal p2-text"><a class="reviewer-name font-bold" title="Heather Highlife" aria-label="Heather Highlife" href="/profile/HeatherHighlife">Heather Highlife</a>: "perfect, light and not too sweet" <a class="review-link font-bold p3-text primary-teal" href="#ad9a499d-353c-4379-8334-edda1a5e35c6" title="Read More" aria-label="Read More">Read More</a></div></div> -->
                <div class="summary-item-wrapper">
                  <div class="recipe-summary-item  h2-text">
                    <span class="value font-light h2-text"><?php $ind = explode(',', $dishes->ind);?>{{  count($ind) }}</span><br>
                    <span class="unit font-normal p3-text">Ingredients</span>
                  </div>
                  <div class="recipe-summary-item unit h2-text">
                    <span class="value font-light h2-text">{{ $dishes->timing }}</span><br>
                    <span class="unit font-normal p3-text">Minutes</span>
                  </div>
                  <div class="recipe-summary-item nutrition h2-text"><span class="value font-light h2-text">{{ $dishes->serve }}</span><br>
                    <span class="unit font-normal p3-text">serve</span>
                  </div>
                </div>
                <div class="ind">Ingrediants:</div>
                  <div class="ingrediant">
                    @foreach(explode(',', $dishes->ind) as $info) 
                      <div>-{{$info}}</div>
                    @endforeach
                  </div>
                <div class="recipe-interactions-wrapper">
                  <button class="read-dir-btn btn-primary wrapper recipe-summary-full-directions p1-text btnreci btn-success" title="Read Directions" id="recipedirection" aria-label="Read Recipies">
                  <span class="p3-text">Read Recipies</span></button><br>
                  <!-- <div class="recipe-details-yum-button yum-button-wrapper"><div id="details-yum-button-desktop" class="yum-block"><button title="Add This Recipe to Your Collection" aria-label="Add This Recipe to Your Collection" class="button btn-yum btn-wrapper yum-click"><div class="yum"></div><span class="count micro-text font-bold">767</span></button></div></div> -->
                </div>
              <div id="description" style="display:none;" class="">
                <p>{{ $dishes->r_desc }}</p>
              </div>
        	</div>
          <br>
        </div><!-- @end #w -->
      </div>
    </div>
  </div>
</section>
@include ('footer');
<script type="text/javascript">
 $('#recipedirection').on('click', function ()
    {
      $('#description').show();
    });
</script>