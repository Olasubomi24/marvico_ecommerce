<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Educational</span> Details</h4>
              <p class="">Kindly fill your details</p>
              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link active" href="<?php echo site_url('staff/educational_details/language'); ?>"></i>Language</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('staff/educational_details_school'); ?>"
                        ></i>School</a
                      >
                    </li>
                  
                  </ul>
                 
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                          <div class="mb-5 col-md-4">
                            <label for="firstName" class="form-label">Mother Tongue</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="mother_tongue"
                              value=""
                              autofocus
                            />
                          </div>
                          <input type="hidden" name="email" value="<?php echo $personal_details[0]['email'];?>" />
                          <div class="mb col-md-8">
                            <label for="lastName" class="form-label"></label>
                            <input class="form-control" type="hidden" name="lastName" id="lastName" value="" />
                          </div>
                       <br>
                          <div class=" col-md-4">
                            <label for="firstName" class="form-label">Other Language</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="mother_tongue"
                              value=""
                              autofocus
                            />
</div>
<div class=" col-md-8">
    <div mbsc-page class="demo-multiple-select">
        <div style="height:50%">
                <label>
        How you know the language?
        <input mbsc-input id="demo-multiple-select-input" placeholder="Please select..." data-dropdown="true" data-input-style="outline" data-label-style="stacked" data-tags="true" />
    </label>
    <select id="demo-multiple-select" multiple>
    
        <option value="1">Read easily</option>
        <option value="2">Read not easily</option>

        <option value="3">Write easily</option>
        <option value="4">Write Not easily</option>
       
        <option value="5">Understand easily</option>
        <option value="6">Understand not easily</option>
       
        <option value="7">Speak easily</option>
        <option value="8">Speak not easily</option>
    </select>
       
    </div>
</div>
</div>
    <div class=" col-md-4">
                            <label for="firstName" class="form-label">Other Language</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="mother_tongue"
                              value=""
                              autofocus
                            />
</div>
<div class=" col-md-8">
    <div mbsc-page class="demo-multiple-selec">
        <div style="height:50%">
                <label>
        How you know the language?
        <input mbsc-input id="demo-multiple-select-inpu" placeholder="Please select..." data-dropdown="true" data-input-style="outline" data-label-style="stacked" data-tags="true" />
    </label>
    <select id="demo-multiple-selec" multiple>
    
        <option value="1">Read easily</option>
        <option value="2">Read not easily</option>

        <option value="3">Write easily</option>
        <option value="4">Write not easily</option>
       
        <option value="5">Understand easily</option>
        <option value="6">Understand not easily</option>
       
        <option value="7">Speak easily</option>
        <option value="8">Speak not easily</option>
    </select>
       
    </div>
</div>
</div>

<div class=" col-md-4">
                            <label for="firstName" class="form-label">Other Language</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="mother_tongue"
                              value=""
                              autofocus
                            />
</div>
<div class=" col-md-8">
    <div mbsc-page class="demo-multiple-sele">
        <div style="height:50%">
                <label>
        How you know the language?
        <input mbsc-input id="demo-multiple-select-inp" placeholder="Please select..." data-dropdown="true" data-input-style="outline" data-label-style="stacked" data-tags="true" />
    </label>
    <select id="demo-multiple-sele" multiple>
    
        <option value="1">Read easily</option>
        <option value="2">Read not easily</option>

        <option value="3">Write easily</option>
        <option value="4">Write Not easily</option>
       
        <option value="5">Understand easily</option>
        <option value="6">Understand not easily</option>
       
        <option value="7">Speak easily</option>
        <option value="8">Speak not easily</option>
    </select>
       
    </div>
</div>
</div>
    

   
    <script>
        
            mobiscroll.setOptions({
        locale: mobiscroll.localeFr,                                         // Specify language like: locale: mobiscroll.localePl or omit setting to use default
        theme: 'ios',                                                        // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'light'                                                // More info about themeVariant: https://docs.mobiscroll.com/5-22-2/javascript/select#opt-themeVariant
    });
    
    mobiscroll.select('#demo-multiple-select', {
        inputElement: document.getElementById('demo-multiple-select-input')  // More info about inputElement: https://docs.mobiscroll.com/5-22-2/javascript/select#opt-inputElement
    });
    </script>
    <script>
    mobiscroll.setOptions({
        locale: mobiscroll.localeFr,                                         // Specify language like: locale: mobiscroll.localePl or omit setting to use default
        theme: 'ios',                                                        // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'light'                                                // More info about themeVariant: https://docs.mobiscroll.com/5-22-2/javascript/select#opt-themeVariant
    });
    
    mobiscroll.select('#demo-multiple-selec', {
        inputElement: document.getElementById('demo-multiple-select-inpu')  // More info about inputElement: https://docs.mobiscroll.com/5-22-2/javascript/select#opt-inputElement
    });
    </script>
    <script>
    mobiscroll.setOptions({
        locale: mobiscroll.localeFr,                                         // Specify language like: locale: mobiscroll.localePl or omit setting to use default
        theme: 'ios',                                                        // Specify theme like: theme: 'ios' or omit setting to use default
        themeVariant: 'light'                                                // More info about themeVariant: https://docs.mobiscroll.com/5-22-2/javascript/select#opt-themeVariant
    });
    
    mobiscroll.select('#demo-multiple-sele', {
        inputElement: document.getElementById('demo-multiple-select-inp')  // More info about inputElement: https://docs.mobiscroll.com/5-22-2/javascript/select#opt-inputElement
    });
    </script>
    