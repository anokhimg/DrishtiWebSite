<?php 

 /*************************************************
## Custom Style
*************************************************/

function kulebe_custom_styling() { ?>

<style type="text/css">
<?php $tipigrof = ot_get_option( 'tipigrof', array() ); ?> 
<?php if($tipigrof) { ?>
body{ 
<?php if($tipigrof['font-color'])     { echo 'color:          '.$tipigrof['font-color'].'';      }else{ echo '';} ?>;
<?php if($tipigrof['font-family'])    { echo 'font-family:    '.$tipigrof['font-family'].'';     }else{ echo '';} ?>;
<?php if($tipigrof['font-size'])      { echo 'font-size:      '.$tipigrof['font-size'].'';       }else{ echo '';} ?>;
<?php if($tipigrof['font-style'])     { echo 'font-style:     '.$tipigrof['font-style'].'';      }else{ echo '';} ?>;
<?php if($tipigrof['font-variant'])   { echo 'font-variant:   '.$tipigrof['font-variant'].'';    }else{ echo '';} ?> ;
<?php if($tipigrof['font-weight'])    { echo 'font-weight:    '.$tipigrof['font-weight'].'';     }else{ echo '';} ?> ;
<?php if($tipigrof['letter-spacing']) { echo 'letter-spacing: '.$tipigrof['letter-spacing'].'';  }else{ echo '';} ?> ;
<?php if($tipigrof['line-height'])    { echo 'line-height:    '.$tipigrof['line-height'].'' ;    }else{ echo '';} ?> ;
<?php if($tipigrof['text-decoration']){ echo 'text-decoration:'.$tipigrof['text-decoration'].''; }else{ echo '';} ?> ;
<?php if($tipigrof['text-transform']) { echo 'text-transform: '.$tipigrof['text-transform'].'' ; }else{ echo '';} ?> ;
}
<?php } ?>


<?php $h1tipigrof = ot_get_option( 'h1_tipigrof', array() ); ?> 
<?php if($h1tipigrof) { ?>
h1{ 
<?php if($h1tipigrof['font-color'])     { echo 'color:          '.$h1tipigrof['font-color'].' !important';      }else{ echo '';} ?>;
<?php if($h1tipigrof['font-family'])    { echo 'font-family:    '.$h1tipigrof['font-family'].' !important';     }else{ echo '';} ?>;
<?php if($h1tipigrof['font-size'])      { echo 'font-size:      '.$h1tipigrof['font-size'].' !important';       }else{ echo '';} ?>;
<?php if($h1tipigrof['font-style'])     { echo 'font-style:     '.$h1tipigrof['font-style'].' !important';      }else{ echo '';} ?>;
<?php if($h1tipigrof['font-variant'])   { echo 'font-variant:   '.$h1tipigrof['font-variant'].' !important';    }else{ echo '';} ?> ;
<?php if($h1tipigrof['font-weight'])    { echo 'font-weight:    '.$h1tipigrof['font-weight'].' !important';     }else{ echo '';} ?> ;
<?php if($h1tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h1tipigrof['letter-spacing'].' !important';  }else{ echo '';} ?> ;
<?php if($h1tipigrof['line-height'])    { echo 'line-height:    '.$h1tipigrof['line-height'].' !important' ;    }else{ echo '';} ?> ;
<?php if($h1tipigrof['text-decoration']){ echo 'text-decoration:'.$h1tipigrof['text-decoration'].' !important'; }else{ echo '';} ?> ;
<?php if($h1tipigrof['text-transform']) { echo 'text-transform: '.$h1tipigrof['text-transform'].' !important' ; }else{ echo '';} ?> ;
}
<?php } ?>



<?php $h2tipigrof = ot_get_option( 'h2_tipigrof', array() ); ?> 
<?php if($h2tipigrof) { ?>
h2{ 
<?php if($h2tipigrof['font-color'])     { echo 'color:          '.$h2tipigrof['font-color'].' !important';      }else{ echo '';} ?>;
<?php if($h2tipigrof['font-family'])    { echo 'font-family:    '.$h2tipigrof['font-family'].' !important';     }else{ echo '';} ?>;
<?php if($h2tipigrof['font-size'])      { echo 'font-size:      '.$h2tipigrof['font-size'].' !important';       }else{ echo '';} ?>;
<?php if($h2tipigrof['font-style'])     { echo 'font-style:     '.$h2tipigrof['font-style'].' !important';      }else{ echo '';} ?>;
<?php if($h2tipigrof['font-variant'])   { echo 'font-variant:   '.$h2tipigrof['font-variant'].' !important';    }else{ echo '';} ?> ;
<?php if($h2tipigrof['font-weight'])    { echo 'font-weight:    '.$h2tipigrof['font-weight'].' !important';     }else{ echo '';} ?> ;
<?php if($h2tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h2tipigrof['letter-spacing'].' !important';  }else{ echo '';} ?> ;
<?php if($h2tipigrof['line-height'])    { echo 'line-height:    '.$h2tipigrof['line-height'].' !important' ;    }else{ echo '';} ?> ;
<?php if($h2tipigrof['text-decoration']){ echo 'text-decoration:'.$h2tipigrof['text-decoration'].' !important'; }else{ echo '';} ?> ;
<?php if($h2tipigrof['text-transform']) { echo 'text-transform: '.$h2tipigrof['text-transform'].' !important' ; }else{ echo '';} ?> ;
}
<?php } ?>


<?php $h3tipigrof = ot_get_option( 'h3_tipigrof', array() ); ?> 
<?php if($h3tipigrof) { ?>
h3{ 
<?php if($h3tipigrof['font-color'])     { echo 'color:          '.$h3tipigrof['font-color'].' !important';      }else{ echo '';} ?>;
<?php if($h3tipigrof['font-family'])    { echo 'font-family:    '.$h3tipigrof['font-family'].' !important';     }else{ echo '';} ?>;
<?php if($h3tipigrof['font-size'])      { echo 'font-size:      '.$h3tipigrof['font-size'].' !important';       }else{ echo '';} ?>;
<?php if($h3tipigrof['font-style'])     { echo 'font-style:     '.$h3tipigrof['font-style'].' !important';      }else{ echo '';} ?>;
<?php if($h3tipigrof['font-variant'])   { echo 'font-variant:   '.$h3tipigrof['font-variant'].' !important';    }else{ echo '';} ?> ;
<?php if($h3tipigrof['font-weight'])    { echo 'font-weight:    '.$h3tipigrof['font-weight'].' !important';     }else{ echo '';} ?> ;
<?php if($h3tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h3tipigrof['letter-spacing'].' !important';  }else{ echo '';} ?> ;
<?php if($h3tipigrof['line-height'])    { echo 'line-height:    '.$h3tipigrof['line-height'].' !important' ;    }else{ echo '';} ?> ;
<?php if($h3tipigrof['text-decoration']){ echo 'text-decoration:'.$h3tipigrof['text-decoration'].' !important'; }else{ echo '';} ?> ;
<?php if($h3tipigrof['text-transform']) { echo 'text-transform: '.$h3tipigrof['text-transform'].' !important' ; }else{ echo '';} ?> ;
}
<?php } ?>


<?php $h4tipigrof = ot_get_option( 'h4_tipigrof', array() ); ?> 
<?php if($h4tipigrof) { ?>
h4{ 
<?php if($h4tipigrof['font-color'])     { echo 'color:          '.$h4tipigrof['font-color'].' !important';      }else{ echo '';} ?>;
<?php if($h4tipigrof['font-family'])    { echo 'font-family:    '.$h4tipigrof['font-family'].' !important';     }else{ echo '';} ?>;
<?php if($h4tipigrof['font-size'])      { echo 'font-size:      '.$h4tipigrof['font-size'].' !important';       }else{ echo '';} ?>;
<?php if($h4tipigrof['font-style'])     { echo 'font-style:     '.$h4tipigrof['font-style'].' !important';      }else{ echo '';} ?>;
<?php if($h4tipigrof['font-variant'])   { echo 'font-variant:   '.$h4tipigrof['font-variant'].' !important';    }else{ echo '';} ?> ;
<?php if($h4tipigrof['font-weight'])    { echo 'font-weight:    '.$h4tipigrof['font-weight'].' !important';     }else{ echo '';} ?> ;
<?php if($h4tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h4tipigrof['letter-spacing'].' !important';  }else{ echo '';} ?> ;
<?php if($h4tipigrof['line-height'])    { echo 'line-height:    '.$h4tipigrof['line-height'].' !important' ;    }else{ echo '';} ?> ;
<?php if($h4tipigrof['text-decoration']){ echo 'text-decoration:'.$h4tipigrof['text-decoration'].' !important'; }else{ echo '';} ?> ;
<?php if($h4tipigrof['text-transform']) { echo 'text-transform: '.$h4tipigrof['text-transform'].' !important' ; }else{ echo '';} ?> ;
}
<?php } ?>


<?php $h5tipigrof = ot_get_option( 'h5_tipigrof', array() ); ?> 
<?php if($h5tipigrof) { ?>
h5{ 
<?php if($h5tipigrof['font-color'])     { echo 'color:          '.$h5tipigrof['font-color'].' !important';      }else{ echo '';} ?>;
<?php if($h5tipigrof['font-family'])    { echo 'font-family:    '.$h5tipigrof['font-family'].' !important';     }else{ echo '';} ?>;
<?php if($h5tipigrof['font-size'])      { echo 'font-size:      '.$h5tipigrof['font-size'].' !important';       }else{ echo '';} ?>;
<?php if($h5tipigrof['font-style'])     { echo 'font-style:     '.$h5tipigrof['font-style'].' !important';      }else{ echo '';} ?>;
<?php if($h5tipigrof['font-variant'])   { echo 'font-variant:   '.$h5tipigrof['font-variant'].' !important';    }else{ echo '';} ?> ;
<?php if($h5tipigrof['font-weight'])    { echo 'font-weight:    '.$h5tipigrof['font-weight'].' !important';     }else{ echo '';} ?> ;
<?php if($h5tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h5tipigrof['letter-spacing'].' !important';  }else{ echo '';} ?> ;
<?php if($h5tipigrof['line-height'])    { echo 'line-height:    '.$h5tipigrof['line-height'].' !important' ;    }else{ echo '';} ?> ;
<?php if($h5tipigrof['text-decoration']){ echo 'text-decoration:'.$h5tipigrof['text-decoration'].' !important'; }else{ echo '';} ?> ;
<?php if($h5tipigrof['text-transform']) { echo 'text-transform: '.$h5tipigrof['text-transform'].' !important' ; }else{ echo '';} ?> ;
}
<?php } ?>


<?php $h6tipigrof = ot_get_option( 'h6_tipigrof', array() ); ?> 
<?php if($h6tipigrof) { ?>
h6{ 
<?php if($h6tipigrof['font-color'])     { echo 'color:          '.$h6tipigrof['font-color'].'!important';      }else{ echo '';} ?>;
<?php if($h6tipigrof['font-family'])    { echo 'font-family:    '.$h6tipigrof['font-family'].'!important';     }else{ echo '';} ?>;
<?php if($h6tipigrof['font-size'])      { echo 'font-size:      '.$h6tipigrof['font-size'].'!important';       }else{ echo '';} ?>;
<?php if($h6tipigrof['font-style'])     { echo 'font-style:     '.$h6tipigrof['font-style'].'!important';      }else{ echo '';} ?>;
<?php if($h6tipigrof['font-variant'])   { echo 'font-variant:   '.$h6tipigrof['font-variant'].'!important';    }else{ echo '';} ?> ;
<?php if($h6tipigrof['font-weight'])    { echo 'font-weight:    '.$h6tipigrof['font-weight'].'!important';     }else{ echo '';} ?> ;
<?php if($h6tipigrof['letter-spacing']) { echo 'letter-spacing: '.$h6tipigrof['letter-spacing'].'!important';  }else{ echo '';} ?> ;
<?php if($h6tipigrof['line-height'])    { echo 'line-height:    '.$h6tipigrof['line-height'].'!important' ;    }else{ echo '';} ?> ;
<?php if($h6tipigrof['text-decoration']){ echo 'text-decoration:'.$h6tipigrof['text-decoration'].'!important'; }else{ echo '';} ?> ;
<?php if($h6tipigrof['text-transform']) { echo 'text-transform: '.$h6tipigrof['text-transform'].'!important' ; }else{ echo '';} ?> ;
}
<?php } ?>

<?php $ptipigrof = ot_get_option( 'p_tipigrof', array() ); ?> 
<?php if($ptipigrof) { ?>
p{ 
<?php if($ptipigrof['font-color'])     { echo 'color:          '.$ptipigrof['font-color'].'!important';      }else{ echo '';} ?>;
<?php if($ptipigrof['font-family'])    { echo 'font-family:    '.$ptipigrof['font-family'].'!important';     }else{ echo '';} ?>;
<?php if($ptipigrof['font-size'])      { echo 'font-size:      '.$ptipigrof['font-size'].'!important';       }else{ echo '';} ?>;
<?php if($ptipigrof['font-style'])     { echo 'font-style:     '.$ptipigrof['font-style'].'!important';      }else{ echo '';} ?>;
<?php if($ptipigrof['font-variant'])   { echo 'font-variant:   '.$ptipigrof['font-variant'].'!important';    }else{ echo '';} ?> ;
<?php if($ptipigrof['font-weight'])    { echo 'font-weight:    '.$ptipigrof['font-weight'].'!important';     }else{ echo '';} ?> ;
<?php if($ptipigrof['letter-spacing']) { echo 'letter-spacing: '.$ptipigrof['letter-spacing'].'!important';  }else{ echo '';} ?> ;
<?php if($ptipigrof['line-height'])    { echo 'line-height:    '.$ptipigrof['line-height'].'!important' ;    }else{ echo '';} ?> ;
<?php if($ptipigrof['text-decoration']){ echo 'text-decoration:'.$ptipigrof['text-decoration'].'!important'; }else{ echo '';} ?> ;
<?php if($ptipigrof['text-transform']) { echo 'text-transform: '.$ptipigrof['text-transform'].'!important' ; }else{ echo '';} ?> ;
}
<?php } ?>

/* General Color Settings */
.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-heading h4.vc_tta-panel-title a {
    color: <?php echo ot_get_option( 'kulebe_main_color' ); ?> !important;
}

.cbp-l-filters-alignCenter .cbp-filter-counter {
    background: <?php echo ot_get_option( 'kulebe_main_color' ); ?>;
}

.cbp-l-caption-buttonLeft, .cbp-l-caption-buttonRight {
    background: <?php echo ot_get_option( 'kulebe_main_color' ); ?>;
}

.vc_tta-tabs .vc_tta-tab a, .vc_tta-tabs .vc_tta-panel-heading a {
    background-color: <?php echo ot_get_option( 'kulebe_main_color' ); ?> !important;
}

.link-box i{
    color : <?php echo ot_get_option( 'kulebe_main_color' ); ?>;
}

button, .button,
input[type="submit"]{
    background : <?php echo ot_get_option( 'kulebe_main_color' ); ?>;
}

.post a.link-btn span {
    background: none repeat scroll 0 0 <?php echo ot_get_option( 'kulebe_main_color' ); ?>;
}


.cbp-l-filters-alignRight .cbp-filter-item, .cbp-l-filters-alignCenter .cbp-filter-item {
    background : <?php echo ot_get_option( 'kulebe_secondary_color' ); ?>;
}

.vc_tta-tabs .vc_tta-tab.vc_active a, .vc_tta-tabs .vc_active .vc_tta-panel-heading a {
    background-color: <?php echo ot_get_option( 'kulebe_secondary_color' ); ?> !important;
}

.cbp-l-filters-alignCenter .cbp-filter-item-active {
    background: <?php echo ot_get_option( 'kulebe_main_color' ); ?>;
}

<?php  /* startheader*/
if (ot_get_option( 'kulebe_blog_background' )) { ?>
section#blog {
    margin-top: 30px;
}

header.shrink{
    background-color: <?php echo ot_get_option( 'kulebe_header_bgcolor' ); ?>;
}

<?php } else { ?>
section#blog {
    margin-top: 150px;
}

<?php if(!is_front_page() || is_home() ) { ?>
header{
    background-color: <?php echo ot_get_option( 'kulebe_header_bgcolor' ); ?>;
    border-bottom: 1px solid transparent;
    box-shadow: 0 0 2px rgba(0, 0, 0, .4);
}

header.shrink{
    background-color: <?php echo ot_get_option( 'kulebe_header_bgcolor' ); ?>;
}
<?php } else { ?>
header{
    background-color: <?php echo ot_get_option( 'kulebe_headertop_bgcolor' ); ?>;
}

header.shrink{
    background-color: <?php echo ot_get_option( 'kulebe_header_bgcolor' ); ?>;
}

<?php } ?>
<?php }/* endheader*/ ?>

<?php if(ot_get_option( 'kulebe_loader' )){ ?>
#loader {
    background: url(<?php echo esc_url(ot_get_option( 'kulebe_loader' )); ?>) center center no-repeat;
}
<?php } ?>

ul.menu-list li a{
    color: <?php echo ot_get_option( 'kulebe_header_fontcolor' ); ?>;
}

ul.menu-list>li:hover>a{
    color: <?php echo ot_get_option( 'kulebe_header_hovercolor' ); ?>;
}

ul.menu-list li.active a{
    color: <?php echo ot_get_option( 'kulebe_header_hovercolor' ); ?> !important;
}

/* Footer */
footer {
    background: <?php echo ot_get_option( 'kulebe_footer_bgcolor' ); ?>;
}

footer h1.logo a, footer h1.logo a:visited {
    color: <?php echo ot_get_option( 'kulebe_footer_fontcolor' ); ?>;
}

footer ul.social-links li a:visited {
    color: <?php echo ot_get_option( 'kulebe_footer_fontcolor' ); ?>;
    transition: 0.4s;
}

footer p{
    color:<?php echo ot_get_option( 'kulebe_footer_fontcolor' ); ?>;
}




</style>
<?php }
add_action('wp_head','kulebe_custom_styling');


?>