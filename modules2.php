<head>

     <title>Modules </title>

     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <?php
	include 'navigation.php';
	?>


  <style>
$areas: one, two, three, four, five, six;

@for $area from 1 through length($areas) {
  
  $areanum: nth($areas, $area);
  
  :root { --area-#{$areanum}: #{$areanum}; }
  
  .grid > *:nth-child(#{$area}) {
    grid-area: var(--area-#{$areanum});
  } 
}

.grid {
  @supports (display: grid) {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: repeat(4, 17rem);
      grid-gap: 1px;
      grid-template-areas:
        "one three three"
        "two three three"
        "four four five"
        "four four six";
  }
}

.card {
  height: auto;
  background: red;
  will-change: grid-area;
  transition: all 1s ease;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  text-transform: uppercase;
  text-align: center;

  &__category { opacity: 0.75; }
}

.button {
  -webkit-appearance: none;
  border: 0;
  padding: .5em 1.25em;
  
  &--is-active {
    background: orange;
  }
}

.pv3 {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}
  </style>

<div class="pv3">
  <button class="button button--is-active js-button-filter" data-category="all">All</button>
  <button class="button js-button-filter" data-category="cat1">Category 1</button>
  <button class="button js-button-filter" data-category="cat2">Category 2</button>
</div>
<section class="grid">
  <article class="card" data-order="1" data-category="cat1">
    <div class="card__content">
      <h6 class="card__category">Category 1</h6>
      <h3 class="card__title">Project #1</h3>
    </div>
  </article>
  <article class="card" data-order="2" data-category="cat2">
    <div class="card__content">
      <h6 class="card__category">Category 2</h6>
      <h3 class="card__title">Project #2</h3>
    </div>
  </article>
  <article class="card" data-order="3" data-category="cat1">
    <div class="card__content">
      <h6 class="card__category">Category 1</h6>
      <h3 class="card__title">Project #3333</h3>
    </div>
  </article>
  <article class="card" data-order="4" data-category="cat2">
    <div class="card__content">
      <h6 class="card__category">Category 2</h6>
      <h3 class="card__title">Project #4</h3>
    </div>
  </article>
  <article class="card" data-order="5" data-category="cat1">
    <div class="card__content">
      <h6 class="card__category">Category 1</h6>
      <h3 class="card__title">Project #5</h3>
    </div>
  </article>
  <article class="card" data-order="6" data-category="cat2">
    <div class="card__content">
      <h6 class="card__category">Category 2</h6>
      <h3 class="card__title">Project #6</h3>
    </div>
  </article>
</section>

<script>
$(document).ready(function() {

let $grid = $('.grid');
let $items = $grid.children('.card');
let currentCat = 'all';
let sidebar = [];
let sortItems = (a,b) => {
  let an = a.getAttribute('data-order');
  let bn = b.getAttribute('data-order');

  if(an > bn) { return 1; }
  if(an < bn) { return -1; }
  return 0;
}

let filterItems = function() {
  let cat = this.getAttribute('data-category');
  let newSidebar = [];
  
  $('.button--is-active').toggleClass('button--is-active');
  $(`.button[data-category=${cat}]`).toggleClass('button--is-active');
  
  $grid.fadeOut( "slow", function() {

    sidebar.map((item) => $(item).appendTo($grid));
    
    if(cat === 'all') {
      $items.sort(sortItems).detach().appendTo($grid);
    } else {
      $(`.card:not([data-category=${cat}])`).each(function() {
        newSidebar.push($(this).detach());
      });
    }
    sidebar = newSidebar;
    currentCat = cat;
  }).fadeIn("slow");
};

// Handle the click on a category filter button
$('.js-button-filter').click(filterItems);



});


</script>
