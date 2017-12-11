
<div class="col-3">
    <?php
    
    $this->load->view('includes/contacts_link');
    
    $this->load->view('includes/right_bar_link');

    if ($method != 'contact_us') :
        $this->load->view('includes/right_bar_enqform');
    endif;

    $this->load->view('includes/right_bar_testimonials');
    ?>


</div>