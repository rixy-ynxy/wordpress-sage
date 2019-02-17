<div class="cat-section">
@php 
    $categories = get_categories();
    foreach ($categories as $category) {
    $cat_id = $category->cat_ID;
    $post_id = 'category_'. $cat_id;

    $cat_imgid = get_field('image-cat', $post_id);

    $cat_img = wp_get_attachment_image_src($cat_imgid);
    echo '<div class="cat-box"><a href="category/' .$category->category_nicename. '"><img src="'. $cat_img[0]. '" alt="'. $category->cat_name. '"><div class="cat-name text-center">' .$category->cat_name.'</div></a></div>';
    }
@endphp
</div>
