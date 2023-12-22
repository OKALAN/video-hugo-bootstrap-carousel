
<div class="container" data-aos="fade-up">
    <div class="section-header">
      <h1><img src="https://skaletek-website-bucket.s3.us-east-2.amazonaws.com/media/assets/img/git-1.png" class="mb-4"> Get In Touch With Us</span></h1>
      <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
    </div>
      <div class="row gy-4 align-items-center" data-aos-delay="400" data-aos="fade-up">
        <div class="col-md-12 contact-box">
          <div class="row">
              <div class="contact-info-form">
              <?php
                                if (isset($_GET['message']) && $_GET['message'] === 'success') {
                                    echo '
                                    <div class="success-message alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Thank you! </strong>Your form has been submitted successfully.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    ';
                                }
                ?>
    
                <form method="POST" action="submit_contact_form.php" id="contactForm">
                  <div class="row">
                    <div class="col">
                      <div class="form-outline">
                        <input type="text" id="form1" name="fullname" class="form-control form-control-lg form-icon-trailing" required/>
                        <label class="form-label" for="form1">Full Name</label>
                        <i class="far fa-user trailing"></i>
                      </div><!-- # input -->
                    </div>  
                    <div class="col">
                        <div class="form-outline">
                          <input type="text" id="form2" name="email" class="form-control form-control-lg form-icon-trailing" required />
                          <label class="form-label" for="form2">Email</label>
                          <i class="far fa-envelope trailing"></i>
                        </div><!-- # input -->
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">  
                      <div class="form-outline">
                        <input type="text" id="form8" name="company" class="form-control form-control-lg form-icon-trailing" required/>
                        <label class="form-label" for="form8">Company/Organisation</label>
                        <i class="fa-regular fa-building trailing"></i>
                      </div><!-- # input -->
                    </div>  
                    <div class="col">
                      <div class="form-outline">
                        <input type="text" id="form9" name="position" class="form-control form-control-lg form-icon-trailing" required/>
                        <label class="form-label" for="form9">What is your position?</label>
                        <i class="fa-solid fa-image-portrait trailing"></i>
                      </div><!-- # input -->
                     </div>  
                  </div>

                  <div class="row">  
                    <div class="col">  
                      <div class="form-outline">
                        <input type="tel" id="form3" name="number" class="form-control form-control-lg form-icon-trailing" required />
                        <label class="form-label" for="form3">Contact Number</label>
                        <i class="fas fa-phone trailing"></i>
                      </div><!-- # input -->
                    </div>  
                    <div class="col">
                      <div class="form-outline">
                        <input type="tel" id="form4" name="whatsapp" class="form-control form-control-lg form-icon-trailing"/>
                        <label class="form-label" for="form4">WhatsApp</label>
                        <i class="fab fa-whatsapp trailing"></i>
                      </div><!-- # input -->
                    </div>  
                  </div>

                 <!-- <div class="form-outline">
                    <input type="text" id="form5" class="form-control form-control-lg form-icon-trailing" />
                    <label class="form-label" for="form5">Skype</label>
                    <i class="fab fa-skype trailing"></i>
                  </div> # input -->
                 <div class="row">  
                   <div class="col">
                    <div class="form-outline">
                      <input type="text" id="form6" name="address" class="form-control form-control-lg form-icon-trailing" />
                      <label class="form-label" for="form6">Address</label>
                      <i class="fa fa-map-marker-alt trailing"></i>
                    </div><!-- # input -->
                    <div >
                    <div class="col d-flex justify-content-center align-items-center">
                        <div style="border-radius: 15px; padding: 20px;">
                          <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" name="robotCheckbox" id="robotCheckbox">
                            <label class="form-check-label" for="robotCheckbox">
                              <span class="fs-5">I'm not a robot</span>
                            </label>
                          </div>
                          <button style="background-color: #66b5d1; color: #ffffff; cursor: not-allowed; border: none; padding: 10px 20px; border-radius: 5px; margin-left: 1px" type="submit" id="submitButton" class="btn" disabled>Submit</button>
                        </div>
                      </div>
                      </div> 
                    </div> 
                   <div class="col">
                    <div class="form-outline">
                      <textarea type="" id="form7" name="message" class="form-control form-control-lg form-icon-trailing" required></textarea>
                      <label class="form-label" for="form7">Message</label>
                      <i class="fa fa-comment trailing"></i>
                    </div><!-- # input -->
                   </div> 
                  </div>
                  <div class="row">
                      <div class="col">
                        <div class="contact-details-box">
                          <div class="location-icon"></div>
                          <div class="contact-details-text">
                            Detroit, Michigan
                          </div>
                        </div>
                      </div>

                      <div class="col">
                        <div class="contact-details-box">
                          <div class="enveloppe-icon"></div>
                          <div class="contact-details-text">
                            info@skaletek.io
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col">
                        <div class="contact-details-box">
                          <div class="fb-icon"></div>
                          <div class="in-icon"></div>
                          <div class="insta-icon"></div>
                          <div class="contact-details-text">
                            SkaleTek
                          </div>
                        </div>
                      </div>

                      <div class="col">
                      <div class=contact-details-box>  
                      <!--<div class="telephone-box">-->
                        <div style="display: flex; align-items: center; margin-bottom: 10px;">
                          <div class="us-flag-icon"></div>
                          <div style="text-align: center; color: #38FFF9; font-size: 20px; font-family: 'Open Sans', sans-serif; font-weight: 700; word-wrap: break-word;">
                            +1 (613) 908-9601
                          </div>
                        </div>
                       <!-- <div style="display: flex; align-items: center;">
                          <div style="background: url(assets/img/openmoji-flag-canada.svg); width: 72px; height: 72px; margin-right: 10px;"></div>
                          <div style="text-align: center; color: #38FFF9; font-size: 20px; font-family: 'Open Sans', sans-serif; font-weight: 700; word-wrap: break-word;">
                            +1 000 000 000
                          </div>
                        </div> -->
                      </div>
                    </div>

                </div>
                </form>
              </div>
          </div>
        </div>
      </div>
  </div>

  <script type="text/javascript">
        // Récupération de la case à cocher et du bouton
        const robotCheck = document.getElementById('robotCheckbox');
        const submitButton = document.getElementById('submitButton');

        // Écouteur d'événement pour la case à cocher
        robotCheck.addEventListener('change', function() {
          if (robotCheck.checked) {
            // Si la case est cochée, activer le bouton
            submitButton.disabled = false;
            // Changer le style du bouton lorsque la case est cochée
            submitButton.style.backgroundColor = '#02A9F7';
            submitButton.style.color = '#ffffff';
            submitButton.style.cursor = 'pointer';
          } else {
            // Si la case n'est pas cochée, désactiver le bouton
            submitButton.disabled = true;
            // Changer le style du bouton lorsque la case n'est pas cochée
            submitButton.style.backgroundColor = '#66b5d1';
            submitButton.style.color = '#ffffff';
            submitButton.style.cursor = 'not-allowed';
          }
        });

  
        // Get the form element
        const contactForm = document.getElementById('contactForm');

        // Add an event listener to the form submission
        contactForm.addEventListener('submit', function(event) {
          // Get the values of the required fields
          const fullname = document.getElementById('form1').value;
          const email = document.getElementById('form2').value;
          const number = document.getElementById('form3').value;
          const whatsapp = document.getElementById('form4').value;
          const address = document.getElementById('form6').value;
          const message = document.getElementById('form7').value;
          const company = document.getElementById('form8').value;
          const position = document.getElementById('form9').value;


        });


    </script>
