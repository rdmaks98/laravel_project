<section id="Dishes" class="description_content">
  <div class="text-content container"> 
    <div class="container">
      <div class="row">
        <div id="w">
          <ul id="filter-list" class="clearfix">
            <a href="{{ url('') }}"><li class="filter" data-filter="all">All</li></a>
            @foreach($category as $cat)
            <a class="category" data-id="{{ $cat->cat_id }}">
              <li class="filter" data-filter="breakfast">{{ $cat->cat_name }}</li>
            </a>
              @endforeach
          </ul><!-- @end #filter-list -->    
          <ul id="portfolio">
            <div class="catsearchhide">
            @foreach($recipi as $val)
            <a href="{{ url('dishes') }}/<?php echo $val->r_id ?>"><li class="item breakfast mix_all" style="display: inline-block;  opacity: 1;"><img src="{{ url('recipies') }}/<?php echo $val->r_image ?>" alt="Food">{{ $val->r_name }}
            </li></a>
            @endforeach
            </div>
            <div style="display:none;" class="catsearchshow">
              @foreach($recipi as $val)
              <a href="{{ url('dishes') }}/<?php echo $val->r_id ?>"><li class="item breakfast mix_all" style="display: inline-block;  opacity: 1;"><img src="{{ url('recipies') }}/<?php echo $val->r_image ?>" alt="Food">{{ $val->r_name }}
              </li></a>
              @endforeach
            </div>
          </ul>
            <!-- @end #portfolio -->
        </div><!-- @end #w -->
      </div>
    </div>
  </div>  
</section>