<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Start Why Us -->
<section id="about" class="potition-relative why-us padding-100 background-fullwidth h-bg join-us"
        style="background-image: url(assets/img/join-us-2.png);height: 500px;">
        <div class="container d-none-mobile">
            <div class="space-50"></div>
            <div class="row align-items-center" data-aos="fade-zoom-in" data-aos-delay="200">
                <div class="col-md-11 offset-md-1">
                    <h3 class="text-white"><?= trans('text_112') ?></h3>
                    <div class="space-25"></div>
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="card card-join-us my-techanic">
                        <div class="card-body text-center">
                            <img src="assets/img/my-techanic-logo-blue.png" class="img-fluid mytechanic" alt="">
                        </div>
                        <div class="card-hover">
                            <h3 class="text-white"><?= trans('text_113') ?></h3>
                            <p class="text-white">
                            <?= trans('text_114') ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card card-join-us business">
                        <div class="card-body text-center">
                            <img src="assets/img/techanic-business-logo-blue.png" class="img-fluid techanic-business" alt="">
                        </div>
                        <div class="card-hover">
                            <h3 class="text-white"><?= trans('text_115') ?></h3>
                            <p class="text-white">
                            <?= trans('text_116') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="text-white d-none-pc"><?= trans('text_117') ?></h3>
    </section>
    <!-- End Why Us -->

    <section id="faq" class="faq padding-100">
        <div class="space-50"></div>
        <div class="container">
            <div class="row align-items-center">
                <!--align-items-center-->
                <div class="col-md-12 col-12" data-aos="fade-right">
                    <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                        <h3 class="text-blue-gradient mb-3"><?= trans('text_118') ?></h3>
                        <p><?= trans('text_119') ?>
                        </p>
                    </div>
                    <div class="space-50"></div>
                    <div class="accordion" id="faqAccordion">
                        <div class="card shadow">
                            <div class="card-header" id="heading_1">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                        Project Manager - Internship
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse_1" class="collapse show" aria-labelledby="heading_1"
                                data-parent="#faqAccordion">
                                <div class="card-body">
                                    <div><p><em><span>Hi Guys!<br><br>We are looking for a Marketing Internship (Project Management) for our fast-growing Marketing Team . Our ideal teammate will have a strong target market experience. As a Project Manager, you will work together with our Marketing Team for the full life cycle of projects including briefs, strategy, scoping and proposal, through to delivery and review. Managing the day to day running of accounts, you will be a strong communicator - ensuring deadlines are met and projects run successfully.</span><br></em></p><p class="">Prefered backgrounds fot this role but not limited to:</p><p>Communication, Management, Marketing Management, Business Administration.</p><p class="">Job Description: </p><ol><li>Build and maintain partners relationships</li><li>Consistently identifying and implementing event collaboration </li><li>Manage some project at one time</li><li>Maintaining communication with project stakeholders</li><li>Organize project schedules </li><li>Help with documentation and other administrative work</li></ol><p class="">Job Requirement:</p><ol><li>Ability to manage multiple tasks at the same time in a fast-paced environment.</li><li>Technically capable, excellent communicator, creative and innovative.</li><li>Familiar with social media strategies and platforms</li><li>Experience with content creation a plus, even if not professionally</li><li>Preferably final semester student or graduated from a related field.</li><li>Good skill in project management</li></ol><p><span>*Only shortlisted candidate will be contacted<br><br>Send your CV and Portfolio to <a href="#" target="_blank">here</a><br>Should you have any questions, do not hesitate to contact us at career@techanic.co !</span></p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>