<?php

class UserPage
{



  static function showEntrance($jobData)
  {
?>
    <!-- job-posting part -->
    <div class="ms-3" id="nav-jobs" role="tabpanel" aria-labelledby="nav-jobs-tab" tabindex="0">
      <h4 class="mt-5 ms-3">Information Technology</h4>
      <div id="carousel1" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner d-flex">
          <div class="carousel-item active">
            <div class="d-flex mt-2 px-5">
              <!-- placing a for loop here -->
              <?php
              // echo "<pre>";
              // foreach($jobData as $job){
              //   var_dump($job);
              // }
              // echo "</pre>";

              for($i = 0; $i < count($jobData);$i++){
              if($jobData[$i]->getJobCategory() == 'IT' && $i < 4){
              // for ($j = 0; $j < 4; $j++) {
                $link = $_SERVER['PHP_SELF'] . "?jobdesc=true&jobid=" . $jobData[$i]->getJobId();
                echo "<a class=\"card me-2\" href=\"" . $link . "\" style=\"z-index:1 ;max-width: 16rem;\">";
                echo "<div class=\"card-body\">";
                echo "<h6 class=\"card-subtitle mb-3 text-muted\">" . $jobData[$i]->getCompanyName() . "</h6>";
                echo "<h5 class=\"card-title\">" . $jobData[$i]->getJobPosition() . "</h5>";
                echo "<p class=\"card-text\">" . substr($jobData[$i]->getJobDescription(), 0, 90) . "..." . "</p>";
                echo "<h6 class=\"card-subtitle mb-3 text-muted\">Pay: " . $jobData[$i]->getSalary() . "</h6>";
                $job_type = '';
                if ($jobData[$i]->getJobType() == 'FT') $job_type = 'Full-Time';
                else $job_type = 'Part-Time';
                echo "<h6 class=\"card-subtitle mb-2 px-2 badge rounded-pill bg-primary text-white\">" . $job_type . "</h6>";
                echo "</div></a>";
                // }
                }
              }

              ?>
            </div>
            </div>
            <div class="carousel-item ">
              <div class="d-flex mt-3 px-5">
                <!-- second for loop here -->
                <?php
                for ($i = 4; $i < count($jobData); $i++) {
                  if ($jobData[$i]->getJobCategory() == 'IT' &&  $i < 8) {

                      $link = $_SERVER['PHP_SELF'] . "?jobdesc=true&jobid=" . $jobData[$i]->getJobId();
                      echo "<a class=\"card me-2\" href=\"" . $link . "\" style=\"z-index:1; max-width: 16rem;\">";
                      echo "<div class=\"card-body\">";
                      echo "<h6 class=\"card-subtitle mb-3 text-muted\">" . $jobData[$i]->getCompanyName() . "</h6>";
                      echo "<h5 class=\"card-title\">" . $jobData[$i]->getJobPosition() . "</h5>";
                      echo "<p class=\"card-text\">" . substr($jobData[$i]->getJobDescription(), 0, 90) . "</p>";
                      echo "<h6 class=\"card-subtitle mb-3 text-muted\">Pay:" . $jobData[$i]->getSalary() . "</h6>";
                      $job_type = '';
                      if ($jobData[$i]->getJobType() == 'FT') $job_type = 'Full-Time';
                      else $job_type = 'Part-Time';
                      echo "<h6 class=\"card-subtitle mb-2 px-2 badge rounded-pill bg-primary text-white\">" . $job_type . "</h6>";
                      echo "</div></a>";
                  }
                }
                ?>
              </div>
            </div>
            <?php  ?>

            <button style="position: absolute; left:-60px" class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
              <svg class="carousel-control-prev-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#000">
                <path d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
              </svg>

            </button>
            <button class="carousel-control-next" style="position: absolute; right:-60px" type="button" data-bs-target="#carousel1" data-bs-slide="next">
              <svg class="carousel-control-next-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#000">
                <path d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg>
            </button>
          </div>
        </div>

        <!-- second category -->
        <h4 class="mt-5 ms-3">Labour</h4>
        <div id="carousel2" class="carousel slide " data-bs-ride="carousel">
          <button style="position: absolute; left:-60px" class="carousel-control-prev" id="carousel-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
            <svg class="carousel-control-prev-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#000">
              <path d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
            </svg>
          </button>
          <button style="position: absolute; right:-60px" class="carousel-control-next" id="carousel-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
            <svg class="carousel-control-next-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#000">
              <path d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
            </svg>
          </button>
          <div class="carousel-inner d-flex">
            <div class="carousel-item active">
              <div class="d-flex mt-2  px-5">
                <?php
                for ($i = 0; $i < count($jobData); $i++) {
                  if ($jobData[$i]->getJobCategory() == 'MB' && $i < 4) {
                  // echo "<div class=\"d-flex mt-2 px-5\">";
                  $link = $_SERVER['PHP_SELF'] . "?jobdesc=true&jobid=" . $jobData[$i]->getJobId();
                  echo "<a class=\"card me-2\" href=\"" . $link . "\" style=\"z-index:1 ;\">";
                  echo "<div class=\"card-body\">";
                  echo "<h6 class=\"card-subtitle mb-3 text-muted\">" . $jobData[$i]->getCompanyName() . "</h6>";
                  echo "<h5 class=\"card-title\">" . $jobData[$i]->getJobPosition() . "</h5>";
                  echo "<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>";
                  echo "<h6 class=\"card-subtitle mb-3 text-muted\">Pay: " . $jobData[$i]->getSalary() . "</h6>";
                  $job_type = '';
                  if ($jobData[$i]->getJobType() == 'FT') $job_type = 'Full-Time';
                  else $job_type = 'Part-Time';
                  echo "<h6 class=\"card-subtitle mb-2 px-2 badge rounded-pill bg-primary text-white\">" . $job_type . "</h6>";
                  echo "</div></a>";
                  }
                }
                ?>
              </div>
            </div>
            <div class="carousel-item ">
              <?php
              for ($i = 4; $i < count($jobData) ; $i++) {
                if($jobData[$i]->getJobCategory() == 'MB' && $i < 8){
                // echo "<div class=\"d-flex mt-2 px-5\">";
                $link = $_SERVER['PHP_SELF'] . "?jobdesc=true&jobid=" . $jobData[$i]->getJobId();
                echo "<a class=\"card me-2\" href=\"" . $link . "\" style=\"z-index:1 ;\">";
                echo "<div class=\"card-body\">";
                echo "<h6 class=\"card-subtitle mb-3 text-muted\">" . $jobData[$i]->getCompanyName() . "</h6>";
                echo "<h5 class=\"card-title\">" . $jobData[$i]->getJobPosition() . "</h5>";
                echo "<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>";
                echo "<h6 class=\"card-subtitle mb-3 text-muted\">Pay: " . $jobData[$i]->getSalary() . "</h6>";
                echo "<h6 class=\"card-subtitle mb-2 px-2 badge rounded-pill bg-primary text-white\">" . $jobData[$i]->getJobType() . "</h6>";
                echo "</div></a>";
                }
              }

              ?>
            </div>
          </div>
        </div>
      </div>
    <?php
  }

  static function showJobDescription($job)
  {
    ?>
      <div class="container mt-5">

        <div class="row">
          <div class="col-md-10">
            <!-- job description -->
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                  <div class="card mb-5" style="border-radius: 25px;">
                    <div class="card-body p-md-5">

                      <div class="row">
                        <!-- SQL ATTR: jobPosition -->
                        <h3 class="text-left"><?= $job->getJobPosition() ?></h3>
                        <!-- SQL ATTR: companyName -->
                        <span class="text-left fs-5"><?= $job->getCompanyName() ?></span>
                        <!-- SQL ATTR: jobLocation -->
                        <span class="text-left fs-5"><?= $job->getJobLocation() ?></span>
                        <!-- SQL ATTR: jobType -->
                        <?php
                        $job_type = '';
                        if ($job->getJobType() == 'FT') $job_type = 'Full-Time';
                        else $job_type = 'Part-Time';
                        ?>
                        <span class="text-left fs-5"><?= $job_type ?></span>
                        <!-- SQL ATTR: salary -->
                        <span class="text-left fs-5">Salary (monthly): <?= $job->getsalary() ?></span>
                        <p></p>
                        <hr>
                        <div class="job-description-content">
                          <ul>
                            <!-- SQL ATTR: jobDescription -->
                            <li class="fs-5">Full Job Description</li>
                            <p>
                              <?= $job->getJobDescription() ?>
                            </p>
                            <!-- SQL ATTR: duty -->
                            <li class="fs-5">What You'll Do:</li>
                            <p><?= $job->getDuty() ?></p>
                            <!-- SQL ATTR: qualification -->
                            <li class="fs-5">About you:</li>
                            <p><?= $job->getQualification() ?></p>
                            <!-- SQL ATTR: benefits -->
                            <li class="fs-5">Benefits:</li>
                            <p><?= $job->getBenefits() ?></p>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=" col-md-2">
            <div class=" container h-100">
              <div class="btn-apply row d-flex justify-content-center align-items-center">
                <div class="col-lg-12 col-xl-11">
                  <?php
                    if(isset($_SESSION['username'])){
                      echo "<button class=\"btn btn-primary fw-bolder\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Apply Now</button>";
                    }else{
                      echo "<a href=\"". LOCATION_LOGIN."\"><button class=\"btn btn-primary fw-bolder\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Log In</button></a>";
                    } 

                  ?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php
    }

    static function applyForm()
    {
      ?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Application Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="innerMain">
                  <div class="container p-5">
                    <div class="card inneradminDetails w-100 m-auto">
                      <div class="card-body">
                        <!-- <h4> Software Engineer Entry Level</h4>
                          <span>Vancouver, BC</span> -->
                        <form class=" col mt-4" enctype="multipart/form-data">
                          <div class="mb-3">
                            <label for="username" class="form-label">Name</label>
                            <input type="text" disabled class="form-control" placeholder="John Doe" id="username" name="username">
                          </div>
                          <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" disabled class="form-control" placeholder="johndoe@gmail.com" id="email" name="email" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="desiredPay" class="form-label">Desired Pay Per Month</label>
                            <input type="number" class="form-control" id="desiredPay" name="desiredPay">
                          </div>
                          <div class="mb-3">
                            <label for="additionalUrl" class="form-label">Additional URL (Optional)</label>
                            <input type="url" class="form-control" id="additionalUrl" name="additionalUrl">
                          </div>

                          <div class="mb-3">
                            <label for="resumeUpload" class="form-label">Upload your resume</label>
                            <input type="file" class="form-control" id="resumeUpload" name="resume" value="" required>
                          </div>
                          <div class="mb-3">
                            <label for="comments" class="form-label">Anything you want to tell us? (Optional)</label>
                            <textarea class="form-control" id="comments" name="comments" rows="2"></textarea>
                          </div>

                          <button type="submit" class="btn btn-primary mt-4 ">Apply</button>

                        </form>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
              </div>
            </div> -->
              </div>
            </div>

        <?php
      }
    }

        ?>