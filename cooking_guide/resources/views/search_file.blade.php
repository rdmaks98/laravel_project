<section id="Dishes" class="description_content catsearchshow" style="">
  <div id="Dishes" class="text-content container"> 
    <div class="container">
      <div class="row">
        <div id="w">
          <ul id="filter-list" class="clearfix">
            <li class="filter-list" data-filter="all">All</li>
            <?php $category = DB::table('categories')->get(); ?>
            @foreach($category as $cat)
            <a class="category" data-id="{{ $cat->cat_id }}">
              <li class="filter" data-filter="breakfast">{{ $cat->cat_name }}</li>
            </a>
              @endforeach
          </ul><!-- @end #filter-list --> 
          <!-- @end #portfolio -->
          <ul id="portfolio">
            @foreach($reci as $value)
            <a href="{{ url('dishes') }}/<?php echo $value->r_id ?>"><li class="item breakfast mix_all" style="display: inline-block;  opacity: 1;"><img src="{{ url('recipies') }}/<?php echo $value->r_image ?>" alt="Food">{{ $value->r_name }}
            </li></a>
            @endforeach
          </ul>
        </div><!-- @end #w -->
      </div>
    </div>
  </div>  
</section>