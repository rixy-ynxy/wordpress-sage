<!-- ページネーション -->
  <div class="pagination">
    @php echo paginate_links( array(
      'type' => 'list',
      'mid_size' => '1',
      'prev_text' => '&laquo;',
      'next_text' => '&raquo;'
    )) @endphp
  </div>