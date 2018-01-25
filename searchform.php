<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="box-widget" id="searchform" method="get">
   <div class="input-group">
  <input class="form-control form-flat klb-input" type="text" id="s" name="s" value="<?php esc_html_e('Search For', 'kulebe') ?>" onfocus="if(this.value=='<?php esc_html_e('Search For', 'kulebe') ?>')this.value='';" onblur="if(this.value=='')this.value='<?php esc_html_e('Search For', 'kulebe') ?>';" autocomplete="off" />  
  <span class="input-group-btn">
   <button class="btn primary-btn btn-flat-solid btn-icon klb-btn" type="submit" value="<?php esc_html_e('Search For', 'kulebe') ?>" onfocus="if(this.value=='<?php esc_html_e('Search For', 'kulebe') ?>')this.value='';" onblur="if(this.value=='')this.value='<?php esc_html_e('Search For', 'kulebe') ?>';" id="searchsubmit"><i class="fa fa-search"></i></button>
  </span>
   </div>
</form>
