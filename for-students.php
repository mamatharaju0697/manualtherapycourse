<?php include "header.php"; ?>
<style>
    .course-tabs .nav-link {
        border: none;
        border-radius: 30px;
        padding: 10px 28px;
        font-weight: 600;
        color: var(--accent-color);
        background-color: #fff;
        border: 1px solid var(--accent-color-2);
    }

    .course-tabs .nav-link.active {
        background-color: var(--accent-color-1);
        color: var(--accent-color);
        border-color: var(--accent-color-1);
    }

    .course-accordion .accordion-item {
        border: 1px solid var(--accent-color-2);
        border-radius: 12px !important;
        overflow: hidden;
        margin-bottom: 16px;
    }

    .course-accordion .accordion-button {
        font-weight: 600;
        color: var(--accent-color);
        gap: 16px;
        border-radius: 12px !important;
    }

    .course-accordion .accordion-button:not(.collapsed) {
        background-color: var(--bg-color-2);
        color: var(--accent-color);
        box-shadow: none;
        border-radius: 12px 12px 0 0 !important;
    }

    .course-accordion .accordion-button:focus {
        box-shadow: none;
    }

    .course-accordion .accordion-button::after {
        border-radius: 50%;
    }

    .course-accordion .accordion-collapse {
        border-radius: 0 0 12px 12px;
        overflow: hidden;
    }

    .course-accordion .accordion-button:hover {
        background-color: var(--accent-color);
        color: #fff;
    }

    .course-accordion .accordion-button:hover .course-badge {
        color: #fff;
        background-color: rgba(255, 255, 255, 0.15);
    }

    .course-icon-wrap {
        width: 56px;
        height: 56px;
        min-width: 56px;
        border-radius: 50%;
        background-color: var(--bg-color-2);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .course-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 0.8rem;
        font-weight: 600;
        padding: 4px 12px;
        border-radius: 20px;
        background-color: var(--bg-color-2);
        color: var(--accent-color);
        white-space: nowrap;
    }

    .course-photo-placeholder {
        width: 100%;
        min-height: 160px;
        border: 2px dashed var(--accent-color-2);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: var(--accent-color-2);
        font-size: 0.85rem;
        padding: 10px;
    }

    .course-photo {
        width: 100%;
        height: 160px;
        object-fit: cover;
        border-radius: 10px;
    }

    .course-table-wrap {
        border: 1px solid var(--accent-color-2);
        border-radius: 10px;
        overflow: hidden;
    }

    .course-schedule-table {
        --bs-table-border-color: var(--accent-color-2);
        font-size: 0.85rem;
        margin-bottom: 0 !important;
    }

    .course-schedule-table thead th {
        background-color: var(--accent-color);
        color: #fff;
        font-weight: 600;
        border-color: var(--accent-color);
        white-space: nowrap;
    }

    .course-schedule-table td,
    .course-schedule-table th {
        vertical-align: top;
        padding: 10px 12px;
    }

    .course-schedule-table tbody tr:nth-of-type(even) {
        background-color: var(--bg-color-2);
    }

    .course-schedule-table tr.fw-semibold td {
        background-color: var(--accent-color-1);
        color: var(--accent-color);
        border-color: var(--accent-color-1);
    }

    .course-schedule-table tbody td:first-child {
        white-space: nowrap;
    }

    .course-schedule-table.has-hours-col tbody td:last-child {
        white-space: nowrap;
    }

    @media (max-width: 576px) {
        .course-tabs .nav-link {
            padding: 8px 18px;
            font-size: 0.85rem;
        }

        .course-accordion .accordion-button {
            flex-wrap: wrap;
            row-gap: 8px;
        }

        .course-accordion .accordion-button .course-icon-wrap {
            width: 40px;
            height: 40px;
            min-width: 40px;
        }

        .course-accordion .accordion-button .flex-grow-1 {
            flex-basis: calc(100% - 56px);
        }

        .course-accordion .accordion-button .course-badge {
            margin-left: 56px;
        }
    }
</style>
<main>
    <!-- Banner -->
    <section class="section position-relative" style="background-image: url(image/header-bg.jpeg);">
        <div class="image-overlay"></div>
        <div class="r-container position-relative h-100" style="z-index: 2;">
            <div class="d-flex flex-column gap-3">
                <h3 class="accent-color font-1 fw-semibold">For Students</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">For Students</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="section bg-color-2">
        <div class="r-container">
            <div class="d-flex flex-column text-center gap-2 mb-4">
                <h6 class="fw-semibold font-1 accent-color-1 ls-2">Courses</h6>
                <h3 class="accent-color font-1 fw-semibold fontsize-30 mb-3">About Our Courses</h3>
            </div>

            <!-- Tabs -->
            <ul class="nav course-tabs justify-content-center gap-2 mb-4" id="courseTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="cpd-tab" data-bs-toggle="tab" data-bs-target="#cpd-pane"
                        type="button" role="tab" aria-controls="cpd-pane" aria-selected="true">
                        CPD (UK) Accredited Courses
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="other-tab" data-bs-toggle="tab" data-bs-target="#other-pane"
                        type="button" role="tab" aria-controls="other-pane" aria-selected="false">
                        Our Professional Certification Courses (MSME (UDAYAM) Registered &amp; ISO 9001:2015 Certified)
                    </button>
                </li>
            </ul>

            <div class="tab-content" id="courseTabContent">
                <!-- CPD (UK) Accredited Courses -->
                <div class="tab-pane fade show active" id="cpd-pane" role="tabpanel" aria-labelledby="cpd-tab">
                    <div class="accordion course-accordion" id="cpdAccordion">

                        <!-- Course 1: COMT -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#cpd1" aria-expanded="true" aria-controls="cpd1">
                                    <span class="course-icon-wrap">
                                        <img src="image/award.png" alt="COMT" width="32" height="32">
                                    </span>
                                    <span class="flex-grow-1 text-start">Certificate in Orthopaedic Manual Therapy (COMT)</span>
                                    <span class="course-badge me-3">7 Days &bull; 56 Credit Hours</span>
                                </button>
                            </h2>
                            <div id="cpd1" class="accordion-collapse collapse show" data-bs-parent="#cpdAccordion">
                                <div class="accordion-body">
                                    <div class="row g-4 align-items-start">
                                        <div class="col-md-8">
                                            <h6 class="fw-semibold accent-color mb-2">Introduction</h6>
                                            <p class="text-justify">Certificate in Orthopedic Manual Therapy covers theory and practical classes with evidence based manual therapy which comprises of 20 manual therapy concepts for treating musculoskeletal disorders. The programme emphasizes comprehensive assessment of peripheral and spine joints using articular, muscular, fascial, neural and psycho-social concepts to assess and treat sports, musculoskeletal and orthopedic conditions, with 56 hours of hands-on practical and theory training.</p>

                                            <h6 class="fw-semibold accent-color mb-2">Scope</h6>
                                            <p class="text-justify">Post professional clinical &amp; didactic education for physiotherapists designed to advance the physiotherapist's preparation as a provider of patient care services in a defined area of manual therapy practice &mdash; substantially advancing expertise in examination, evaluation, diagnosis, prognosis, intervention and management of patients.</p>

                                            <h6 class="fw-semibold accent-color mb-2">Course Outcome</h6>
                                            <ul class="ps-3 mb-3 text-justify">
                                                <li>Framework for complete assessment using articular, neural, muscular, fascial and psycho-social concepts</li>
                                                <li>Framework to solve complex musculoskeletal problems</li>
                                                <li>Ability to provide patients with simple strategies so they can manage themselves</li>
                                                <li>Clinical case scenarios using Maitland, Mennell, Mulligan, McKenzie, MFR, PRT, PNF, David Butler's and Michael Shacklock Neural Mobilization, Fascial Manipulation, Cyriax Osteopathy and Chiropractic manipulations</li>
                                            </ul>

                                            <p class="mb-1 text-justify"><strong>Medium of Instruction:</strong> English</p>
                                            <p class="mb-3 text-justify"><strong>Eligibility:</strong> Physiotherapy Interns/Clinicians, Post graduate students of Physiotherapy, Lecturers or Doctorate from an approved institution in Physiotherapy.</p>

                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <span class="course-badge"><i class="fa-solid fa-certificate"></i> CPD (UK) Certificate</span>
                                                <span class="course-badge"><i class="fa-solid fa-file-lines"></i> Transcript (56 Credit Hours)</span>
                                                <span class="course-badge"><i class="fa-solid fa-book"></i> Study Material</span>
                                            </div>
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <a href="https://thecpdregister.com/providers/cpd-group-providers--786671" target="_blank">
                                                    <img src="image/786671.png" alt="CPD Accredited" width="250" />
                                                </a>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <a href="" class="btn font-1 fw-semibold accent-color-1" data-bs-toggle="modal"
                                                    data-bs-target="#registerModal">Register Now <i class="fa-solid fa-arrow-right"></i></a>
                                                <a href="course.php?course=comt" class="font-2 fw-semibold" target="_blank"><i class="fa-solid fa-link"></i> Direct link to this course</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="image/certificate-batch/Picture1.jpg" alt="Certificate in Orthopaedic Manual Therapy batch photo" class="course-photo">
                                        </div>
                                    </div>

                                    <hr class="my-3">
                                    <h6 class="fw-semibold accent-color mb-2">Schedule</h6>
                                    <div class="table-responsive course-table-wrap mb-3">
                                        <table class="table table-sm table-bordered course-schedule-table has-hours-col mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width:80px; white-space:nowrap;">Day</th>
                                                    <th>Contents</th>
                                                    <th style="width:110px; white-space:nowrap;">Credit Hours</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="white-space:nowrap;">Day 1</td>
                                                    <td>Introduction to different Manual Therapy concepts and comprehensive Integrated Manual Therapy for different clinical conditions including Maitland, Mennell, Mulligan, McKenzie, MFR, David Butler's and Michael Shacklock, Neural Mobilisation, Fascial Manipulation, Cyriax and clinical case discussions. Integrated Manual Therapy for shoulder disorders like frozen shoulder and tendinosis.</td>
                                                    <td>8</td>
                                                </tr>
                                                <tr>
                                                    <td>Day 2</td>
                                                    <td>Integrated Manual Therapy techniques for Elbow and Wrist &mdash; Tennis elbow, Golfer's Elbow, Stiff Elbow, Dequervain's disease, MCP Arthritis.</td>
                                                    <td>8</td>
                                                </tr>
                                                <tr>
                                                    <td>Day 3</td>
                                                    <td>Integrated Manual Therapy techniques for Knee, Ankle and Foot complex disorders &mdash; Osteoarthritis of Knee, Stiff Knee, Lateral ligament injury, Plantar Fasciitis, Calcaneal spur, Metatarsalgia, Post fracture.</td>
                                                    <td>8</td>
                                                </tr>
                                                <tr>
                                                    <td>Day 4</td>
                                                    <td>Integrated Manual Therapy techniques for Cervical spine disorders &mdash; cervical spondylosis, cervicogenic headache, facet joint syndrome, intervertebral disc bulge, cervical radiculopathy and cervical strain.</td>
                                                    <td>8</td>
                                                </tr>
                                                <tr>
                                                    <td>Day 5</td>
                                                    <td>Integrated Manual Therapy techniques for Lumbar Spine and Pelvic girdle disorders &mdash; Lumbar spondylosis, Lumbar radiculopathy, Sciatica, SI joint syndrome and disc bulge.</td>
                                                    <td>8</td>
                                                </tr>
                                                <tr>
                                                    <td>Day 6</td>
                                                    <td>Integrated Manual Therapy techniques for Thoracic disorders &mdash; T4 syndrome, postural thoracic pain and costochondritis.</td>
                                                    <td>8</td>
                                                </tr>
                                                <tr>
                                                    <td>Day 7</td>
                                                    <td>Revision of all techniques and certification examination (Theory and Practical).</td>
                                                    <td>8</td>
                                                </tr>
                                                <tr class="fw-semibold">
                                                    <td colspan="2">Total</td>
                                                    <td>56</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <h6 class="fw-semibold accent-color mb-2">Examination</h6>
                                    <p class="text-justify">Objective Structured Clinical Examination (OSCE) and theory examination are conducted at the end of the program. A minimum of 50% must be secured to get certified.</p>
                                    <div class="table-responsive course-table-wrap mb-3 d-inline-block" style="max-width:420px; width:100%;">
                                        <table class="table table-sm table-bordered course-schedule-table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>Case reports and Assignments</td>
                                                    <td>100 Marks</td>
                                                </tr>
                                                <tr>
                                                    <td>Theory</td>
                                                    <td>50 Marks</td>
                                                </tr>
                                                <tr>
                                                    <td>OSCE</td>
                                                    <td>100 Marks</td>
                                                </tr>
                                                <tr class="fw-semibold">
                                                    <td>Total</td>
                                                    <td>250 Marks</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Course 2: CMMT -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#cpd2" aria-expanded="false" aria-controls="cpd2">
                                    <span class="course-icon-wrap">
                                        <img src="image/award.png" alt="CMMT" width="32" height="32">
                                    </span>
                                    <span class="flex-grow-1 text-start">Certificate in Mastery in Manual Therapy (CMMT)</span>
                                    <span class="course-badge me-3">6 Days &bull; 48 Credit Hours</span>
                                </button>
                            </h2>
                            <div id="cpd2" class="accordion-collapse collapse" data-bs-parent="#cpdAccordion">
                                <div class="accordion-body">
                                    <div class="row g-4 align-items-start">
                                        <div class="col-md-8">
                                            <h6 class="fw-semibold accent-color mb-2">Introduction</h6>
                                            <p class="text-justify">CMMT is an advanced hands-on course for physiotherapists and healthcare professionals seeking a holistic approach to patient care. The program integrates Belt Mobilisation, Neural Mobilisation, Visceral Manipulation and Craniosacral Therapy, offering a comprehensive understanding of the body's interrelated systems through evidence-based techniques, demonstrations, case discussions and guided practice.</p>

                                            <h6 class="fw-semibold accent-color mb-2">Scope</h6>
                                            <ul class="ps-3 mb-3 text-justify">
                                                <li>Develop expertise in integrating multiple advanced manual therapy techniques for comprehensive patient management</li>
                                                <li>Enhance clinical reasoning to assess and manage complex musculoskeletal, neural, visceral and craniosacral dysfunctions</li>
                                                <li>Apply multidimensional manual therapy principles across orthopaedics, sports rehabilitation, neurology and private practice</li>
                                                <li>Improve patient outcomes by addressing the root cause of pain through a holistic, evidence-informed approach</li>
                                                <li>Strengthen professional competence and expand career opportunities in advanced manual therapy</li>
                                            </ul>

                                            <h6 class="fw-semibold accent-color mb-2">Course Outcome</h6>
                                            <ul class="ps-3 mb-3 text-justify">
                                                <li>Demonstrate advanced hands-on skills in craniosacral therapy, neural mobilisation, visceral manipulation, spinal manipulation and belt mobilisation</li>
                                                <li>Accurately assess and identify dysfunctions of the musculoskeletal, neural, visceral and craniosacral systems</li>
                                                <li>Apply appropriate manual therapy techniques based on differential diagnosis and functional limitations</li>
                                                <li>Integrate neural mobilisation and visceral manipulation into clinical practice for complex pain conditions</li>
                                                <li>Perform spinal and belt mobilisation/manipulation techniques with correct positioning and force control</li>
                                                <li>Design comprehensive manual therapy treatment plans combining multiple approaches</li>
                                                <li>Enhance clinical decision-making and safety awareness, including red flags in advanced practice</li>
                                            </ul>

                                            <p class="mb-1 text-justify"><strong>Medium of Instruction:</strong> English</p>
                                            <p class="mb-3 text-justify"><strong>Eligibility:</strong> Physiotherapy Interns/Clinicians, Post graduate students, Lecturers or Doctorate from an approved institution in Physiotherapy.</p>

                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <span class="course-badge"><i class="fa-solid fa-certificate"></i> CPD (UK) Certificate</span>
                                                <span class="course-badge"><i class="fa-solid fa-file-lines"></i> Transcript (48 Credit Hours)</span>
                                                <span class="course-badge"><i class="fa-solid fa-book"></i> Study Material</span>
                                                <span class="course-badge"><i class="fa-solid fa-band-aid"></i> Mobilisation Belt</span>
                                            </div>
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <a href="https://thecpdregister.com/providers/cpd-group-providers--786671" target="_blank">
                                                    <img src="image/786671.png" alt="CPD Accredited" width="250" />
                                                </a>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <a href="" class="btn font-1 fw-semibold accent-color-1" data-bs-toggle="modal"
                                                    data-bs-target="#registerModal">Register Now <i class="fa-solid fa-arrow-right"></i></a>
                                                <a href="course.php?course=cmmt" class="font-2 fw-semibold" target="_blank"><i class="fa-solid fa-link"></i> Direct link to this course</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="image/certificate-batch/Picture2.jpg" alt="Certificate in Mastery in Manual Therapy batch photo" class="course-photo">
                                        </div>
                                    </div>

                                    <hr class="my-3">
                                    <h6 class="fw-semibold accent-color mb-2">Schedule</h6>
                                    <div class="table-responsive course-table-wrap mb-3">
                                        <table class="table table-sm table-bordered course-schedule-table has-hours-col mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width:100px; white-space:nowrap;">Day</th>
                                                    <th>Contents</th>
                                                    <th style="width:110px; white-space:nowrap;">Credit Hours</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="white-space:nowrap;">Day 1</td>
                                                    <td>Craniosacral Therapy &mdash; introduction, indications and contraindications, assessing restrictions in the craniosacral system; techniques for migraine, cervicogenic headache, chronic pain syndrome, fibromyalgia, neck pain, back pain, TMJ dysfunction, post-concussion syndrome, sinus issues, sleep disorders and colic disorders.</td>
                                                    <td>8</td>
                                                </tr>
                                                <tr>
                                                    <td>Day 2</td>
                                                    <td>Visceral Manipulation &mdash; introduction, indications and contraindications, assessing restrictions in visceral organs; techniques for IBS, GERD, gastritis, visceral organ restrictions, bloating, constipation, back pain and other musculoskeletal pain disorders.</td>
                                                    <td>8</td>
                                                </tr>
                                                <tr>
                                                    <td>Day 3</td>
                                                    <td>Neural Mobilisation &mdash; introduction, indications and contraindications for irritable/non-irritable disorders; treatment techniques for sciatica, tarsal tunnel syndrome, lateral collateral ligament injury, cervical spondylosis, tennis elbow, Dequervain's disease and carpal tunnel syndrome.</td>
                                                    <td>8</td>
                                                </tr>
                                                <tr>
                                                    <td>Day 4</td>
                                                    <td>Manipulation of Spine &mdash; introduction to manipulation and hand grips, red flags and contraindications; cervical spine manipulation for hypomobility, thoracic spine manipulation for T4 syndrome, lumbar spine manipulation for disc bulge and facet joint syndromes, pelvic girdle manipulation for upslip and other syndromes.</td>
                                                    <td>8</td>
                                                </tr>
                                                <tr>
                                                    <td style="white-space:nowrap;">Day 5 &amp; 6</td>
                                                    <td>Belt Mobilisation &mdash; introduction, indications and contraindications; treatment techniques for upper quadrant, lower quadrant and spine dysfunctions using belt.</td>
                                                    <td>16</td>
                                                </tr>
                                                <tr class="fw-semibold">
                                                    <td colspan="2">Total</td>
                                                    <td>48</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <h6 class="fw-semibold accent-color mb-2">Examination</h6>
                                    <p class="text-justify">OSCE and theory examination are conducted at the end of the program. A minimum of 50% must be secured to get certified.</p>
                                    <div class="table-responsive course-table-wrap mb-3 d-inline-block" style="max-width:420px; width:100%;">
                                        <table class="table table-sm table-bordered course-schedule-table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>Case reports and Assignments</td>
                                                    <td>100 Marks</td>
                                                </tr>
                                                <tr>
                                                    <td>Theory</td>
                                                    <td>50 Marks</td>
                                                </tr>
                                                <tr>
                                                    <td>OSCE</td>
                                                    <td>100 Marks</td>
                                                </tr>
                                                <tr class="fw-semibold">
                                                    <td>Total</td>
                                                    <td>250 Marks</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Course 3: Kinesiology Taping -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#cpd3" aria-expanded="false" aria-controls="cpd3">
                                    <span class="course-icon-wrap">
                                        <img src="image/award.png" alt="Kinesiology Taping" width="32" height="32">
                                    </span>
                                    <span class="flex-grow-1 text-start">Certificate in Kinesiology Taping</span>
                                    <span class="course-badge me-3">1 Day &bull; 8 Credit Hours</span>
                                </button>
                            </h2>
                            <div id="cpd3" class="accordion-collapse collapse" data-bs-parent="#cpdAccordion">
                                <div class="accordion-body">
                                    <div class="row g-4 align-items-start">
                                        <div class="col-md-8">
                                            <h6 class="fw-semibold accent-color mb-2">Course Objectives</h6>
                                            <ul class="ps-3 mb-3 text-justify">
                                                <li>Understand the principles and theory behind kinesiology taping</li>
                                                <li>Identify muscle and joint injuries</li>
                                                <li>Apply appropriate taping techniques for various body regions like ankle, knee, shoulder and lower back</li>
                                                <li>Demonstrate proper tape application methods and integrate kinesiology taping into clinical practice while considering assessment and contraindications</li>
                                                <li>Improve muscle function and support the healing process</li>
                                            </ul>
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <span class="course-badge"><i class="fa-solid fa-book"></i> Study Material</span>
                                                <span class="course-badge"><i class="fa-solid fa-certificate"></i> CPD (UK) Certificate</span>
                                                <span class="course-badge"><i class="fa-solid fa-file-lines"></i> Transcript (08 Credit Hours)</span>
                                                <span class="course-badge"><i class="fa-solid fa-tape"></i> K Tape</span>
                                            </div>
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <a href="https://thecpdregister.com/providers/cpd-group-providers--786671" target="_blank">
                                                    <img src="image/786671.png" alt="CPD Accredited" width="250" />
                                                </a>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <a href="" class="btn font-1 fw-semibold accent-color-1" data-bs-toggle="modal"
                                                    data-bs-target="#registerModal">Register Now <i class="fa-solid fa-arrow-right"></i></a>
                                                <a href="course.php?course=kinesiology-taping" class="font-2 fw-semibold" target="_blank"><i class="fa-solid fa-link"></i> Direct link to this course</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="image/certificate-batch/Picture3.jpg" alt="Certificate in Kinesiology Taping batch photo" class="course-photo">
                                        </div>
                                    </div>

                                    <hr class="my-3">
                                    <h6 class="fw-semibold accent-color mb-2">Schedule</h6>
                                    <div class="table-responsive course-table-wrap mb-3">
                                        <table class="table table-sm table-bordered course-schedule-table has-hours-col mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width:150px; white-space:nowrap;">Time</th>
                                                    <th>Contents</th>
                                                    <th style="width:150px; white-space:nowrap;">Hours</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>9:30 AM &ndash; 10:30 AM</td>
                                                    <td>Introduction to taping and its application</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>10:30 AM &ndash; 11:00 AM</td>
                                                    <td>Taping for ankle conditions like Achilles tendinopathy and plantar fasciitis</td>
                                                    <td>30 minutes</td>
                                                </tr>
                                                <tr>
                                                    <td>11:00 AM &ndash; 11:15 AM</td>
                                                    <td>Coffee Break</td>
                                                    <td>15 minutes</td>
                                                </tr>
                                                <tr>
                                                    <td>11:15 AM &ndash; 11:45 AM</td>
                                                    <td>Taping for ankle conditions like tendinosis and calcaneal spur</td>
                                                    <td>30 minutes</td>
                                                </tr>
                                                <tr>
                                                    <td>11:45 AM &ndash; 1:00 PM</td>
                                                    <td>Fat pad impingement syndrome, patellar tendinosis, anterior knee pain syndrome</td>
                                                    <td>1 hour 15 minutes</td>
                                                </tr>
                                                <tr>
                                                    <td>1:00 PM &ndash; 2:00 PM</td>
                                                    <td>Lunch</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>2:00 PM &ndash; 3:00 PM</td>
                                                    <td>Tennis elbow, golfer's elbow, Dequervain's syndrome, CMP arthritis and carpal tunnel syndrome</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>3:00 PM &ndash; 4:00 PM</td>
                                                    <td>Rotator cuff injury, supraspinatus tendinosis, bicipital tendinosis</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>4:00 PM &ndash; 5:00 PM</td>
                                                    <td>Cervical spondylosis, neck strain, rhomboideus muscle strain, lumbar disc bulge, sciatica and more</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>5:00 PM &ndash; 5:30 PM</td>
                                                    <td>Discussion and certificate distribution</td>
                                                    <td>30 minutes</td>
                                                </tr>
                                                <tr class="fw-semibold">
                                                    <td colspan="2">Total Credit Hours</td>
                                                    <td>8 hours</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Course 4: Sports Manual Therapy -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#cpd4" aria-expanded="false" aria-controls="cpd4">
                                    <span class="course-icon-wrap">
                                        <img src="image/award.png" alt="Sports Manual Therapy" width="32" height="32">
                                    </span>
                                    <span class="flex-grow-1 text-start">Certificate in Sports Manual Therapy</span>
                                    <span class="course-badge me-3">2 Days &bull; 16 Credit Hours</span>
                                </button>
                            </h2>
                            <div id="cpd4" class="accordion-collapse collapse" data-bs-parent="#cpdAccordion">
                                <div class="accordion-body">
                                    <div class="row g-4 align-items-start">
                                        <div class="col-md-8">
                                            <h6 class="fw-semibold accent-color mb-2">Course Objectives</h6>
                                            <ul class="ps-3 mb-3 text-justify">
                                                <li>Understand the principles and theory behind Sports Manual Therapy</li>
                                                <li>Identify muscle and joint injuries</li>
                                                <li>Apply appropriate manual therapy techniques for spinal sports injuries</li>
                                                <li>Demonstrate proper manual therapy assessment and treatment for spinal sport injuries</li>
                                                <li>Learn contraindications and indications for applying manual therapy in sports spinal conditions</li>
                                            </ul>
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <span class="course-badge"><i class="fa-solid fa-certificate"></i> CPD (UK) Certificate</span>
                                                <span class="course-badge"><i class="fa-solid fa-file-lines"></i> Transcript</span>
                                            </div>
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <a href="https://thecpdregister.com/providers/cpd-group-providers--786671" target="_blank">
                                                    <img src="image/786671.png" alt="CPD Accredited" width="250" />
                                                </a>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <a href="" class="btn font-1 fw-semibold accent-color-1" data-bs-toggle="modal"
                                                    data-bs-target="#registerModal">Register Now <i class="fa-solid fa-arrow-right"></i></a>
                                                <a href="course.php?course=sports-manual-therapy" class="font-2 fw-semibold" target="_blank"><i class="fa-solid fa-link"></i> Direct link to this course</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="image/certificate-batch/Picture4.jpg" alt="Certificate in Sports Manual Therapy batch photo" class="course-photo">
                                        </div>
                                    </div>

                                    <hr class="my-3">
                                    <h6 class="fw-semibold accent-color mb-2">Schedule</h6>
                                    <div class="table-responsive course-table-wrap mb-3">
                                        <table class="table table-sm table-bordered course-schedule-table mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width:70px; white-space:nowrap;">Day</th>
                                                    <th style="width:150px; white-space:nowrap;">Time</th>
                                                    <th>Contents</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td rowspan="6" style="white-space:nowrap;">Day 1</td>
                                                    <td style="white-space:nowrap;">10:00 AM &ndash; 11:15 AM</td>
                                                    <td>Introduction to spinal conditions in sports injuries</td>
                                                </tr>
                                                <tr>
                                                    <td style="white-space:nowrap;">11:15 AM &ndash; 1:00 PM</td>
                                                    <td>Sports injury assessment in cervical spine</td>
                                                </tr>
                                                <tr>
                                                    <td style="white-space:nowrap;">1:00 PM &ndash; 2:00 PM</td>
                                                    <td>Lunch</td>
                                                </tr>
                                                <tr>
                                                    <td style="white-space:nowrap;">2:00 PM &ndash; 4:00 PM</td>
                                                    <td>Management of concussion, cervical whiplash syndrome, wry neck syndrome, disc protrusions and facet joint syndrome</td>
                                                </tr>
                                                <tr>
                                                    <td style="white-space:nowrap;">4:00 PM &ndash; 5:00 PM</td>
                                                    <td>Clinical case scenarios</td>
                                                </tr>
                                                <tr>
                                                    <td style="white-space:nowrap;">5:00 PM &ndash; 5:30 PM</td>
                                                    <td>Discussion and certificate distribution</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="5" style="white-space:nowrap;">Day 2</td>
                                                    <td style="white-space:nowrap;">10:00 AM &ndash; 11:00 AM</td>
                                                    <td>Introduction to spinal conditions in sports injuries</td>
                                                </tr>
                                                <tr>
                                                    <td style="white-space:nowrap;">11:00 AM &ndash; 11:15 AM</td>
                                                    <td>Tea break</td>
                                                </tr>
                                                <tr>
                                                    <td style="white-space:nowrap;">11:15 AM &ndash; 1:00 PM</td>
                                                    <td>Sports injury assessment in lumbar spine</td>
                                                </tr>
                                                <tr>
                                                    <td style="white-space:nowrap;">1:00 PM &ndash; 2:00 PM</td>
                                                    <td>Lunch</td>
                                                </tr>
                                                <tr>
                                                    <td style="white-space:nowrap;">2:00 PM &ndash; 4:00 PM</td>
                                                    <td>Management of disc protrusions, thoracic dorsal fascia syndrome using sling therapy, lumbar listhesis and lumbar acute facet joint syndrome</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td style="white-space:nowrap;">4:00 PM &ndash; 5:00 PM</td>
                                                    <td>Clinical case scenarios</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Course 5: Spinal Manipulation -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#cpd5" aria-expanded="false" aria-controls="cpd5">
                                    <span class="course-icon-wrap">
                                        <img src="image/award.png" alt="Spinal Manipulation" width="32" height="32">
                                    </span>
                                    <span class="flex-grow-1 text-start">Certificate in Spinal Manipulation</span>
                                    <span class="course-badge me-3">1 Day &bull; 8 Credit Hours</span>
                                </button>
                            </h2>
                            <div id="cpd5" class="accordion-collapse collapse" data-bs-parent="#cpdAccordion">
                                <div class="accordion-body">
                                    <div class="row g-4 align-items-start">
                                        <div class="col-md-8">
                                            <p class="text-justify">Spine manipulation restores or enhances joint function, with the general goals of resolving joint inflammation and reducing pain. The original adjustment approach is generally referred to as spinal manipulation and may also be called the diversified technique or the High Velocity Low Amplitude thrust (HVLA).</p>
                                            <h6 class="fw-semibold accent-color mb-2">Course Objectives</h6>
                                            <ul class="ps-3 mb-3 text-justify">
                                                <li>Learn red flags for manipulation</li>
                                                <li>Learn to assess spinal dysfunctions and identify conditions suitable for spinal manipulation</li>
                                                <li>Develop hands-on skills in performing safe and effective spinal manipulation techniques</li>
                                                <li>Recognize contraindications and precautions to ensure patient safety</li>
                                                <li>Integrate spinal manipulation into a comprehensive treatment plan to improve patient outcomes</li>
                                            </ul>
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <span class="course-badge"><i class="fa-solid fa-book"></i> Study Material</span>
                                                <span class="course-badge"><i class="fa-solid fa-certificate"></i> Certificate (Accredited Internationally by CPD UK)</span>
                                                <span class="course-badge"><i class="fa-solid fa-file-lines"></i> Transcript (08 Credit Hours)</span>
                                            </div>
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <a href="https://thecpdregister.com/providers/cpd-group-providers--786671" target="_blank">
                                                    <img src="image/786671.png" alt="CPD Accredited" width="250" />
                                                </a>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <a href="" class="btn font-1 fw-semibold accent-color-1" data-bs-toggle="modal"
                                                    data-bs-target="#registerModal">Register Now <i class="fa-solid fa-arrow-right"></i></a>
                                                <a href="course.php?course=spinal-manipulation" class="font-2 fw-semibold" target="_blank"><i class="fa-solid fa-link"></i> Direct link to this course</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="image/certificate-batch/Picture5.jpg" alt="Certificate in Spinal Manipulation batch photo" class="course-photo">
                                        </div>
                                    </div>

                                    <hr class="my-3">
                                    <h6 class="fw-semibold accent-color mb-2">Schedule</h6>
                                    <div class="table-responsive course-table-wrap mb-3">
                                        <table class="table table-sm table-bordered course-schedule-table mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width:150px; white-space:nowrap;">Time</th>
                                                    <th>Contents</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>9:30 AM &ndash; 10:30 AM</td>
                                                    <td>Introduction to manipulation and hand grips</td>
                                                </tr>
                                                <tr>
                                                    <td>10:30 AM &ndash; 11:30 AM</td>
                                                    <td>Red flags and contraindications for manipulation</td>
                                                </tr>
                                                <tr>
                                                    <td>11:30 AM &ndash; 12:30 PM</td>
                                                    <td>Cervical spine manipulation techniques for hypomobility</td>
                                                </tr>
                                                <tr>
                                                    <td>12:30 PM &ndash; 1:30 PM</td>
                                                    <td>Lunch break</td>
                                                </tr>
                                                <tr>
                                                    <td>1:30 PM &ndash; 2:30 PM</td>
                                                    <td>Thoracic spine manipulation techniques for thoracic disorders like T4 syndrome and more</td>
                                                </tr>
                                                <tr>
                                                    <td>2:30 PM &ndash; 3:30 PM</td>
                                                    <td>Lumbar spine manipulation techniques for disc bulge and facet joint syndromes</td>
                                                </tr>
                                                <tr>
                                                    <td>3:30 PM &ndash; 4:30 PM</td>
                                                    <td>Pelvic girdle manipulation techniques for upslip and other syndromes</td>
                                                </tr>
                                                <tr>
                                                    <td>4:30 PM &ndash; 5:30 PM</td>
                                                    <td>Discussion and distribution of certificates</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Other Courses -->
                <div class="tab-pane fade" id="other-pane" role="tabpanel" aria-labelledby="other-tab">
                    <div class="accordion course-accordion" id="otherAccordion">

                        <!-- Course 6: Trigger Point Therapy -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#other1" aria-expanded="true" aria-controls="other1">
                                    <span class="course-icon-wrap">
                                        <img src="image/award.png" alt="Trigger Point Therapy" width="32" height="32">
                                    </span>
                                    <span class="flex-grow-1 text-start">Certificate in Trigger Point Therapy</span>
                                    <span class="course-badge me-3">1 Day &bull; 8 Credit Hours</span>
                                </button>
                            </h2>
                            <div id="other1" class="accordion-collapse collapse show" data-bs-parent="#otherAccordion">
                                <div class="accordion-body">
                                    <div class="row g-4 align-items-start">
                                        <div class="col-md-8">
                                            <h6 class="fw-semibold accent-color mb-2">Course Objectives</h6>
                                            <ul class="ps-3 mb-3 text-justify">
                                                <li>Define and explain the concept of trigger points and their pathophysiology</li>
                                                <li>Identify and classify active and latent trigger points in commonly affected muscles</li>
                                                <li>Demonstrate palpation skills to accurately locate trigger points</li>
                                                <li>Analyze pain referral patterns associated with specific trigger points</li>
                                                <li>Apply appropriate therapeutic techniques for trigger point management</li>
                                                <li>Integrate trigger point therapy into clinical reasoning and patient-specific treatment</li>
                                            </ul>
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <span class="course-badge"><i class="fa-solid fa-book"></i> Study Material</span>
                                                <span class="course-badge"><i class="fa-solid fa-certificate"></i> Certificate</span>
                                                <span class="course-badge"><i class="fa-solid fa-file-lines"></i> Transcript</span>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <a href="" class="btn font-1 fw-semibold accent-color-1" data-bs-toggle="modal"
                                                    data-bs-target="#registerModal">Register Now <i class="fa-solid fa-arrow-right"></i></a>
                                                <a href="course.php?course=trigger-point-therapy" class="font-2 fw-semibold" target="_blank"><i class="fa-solid fa-link"></i> Direct link to this course</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="image/certificate-batch/Picture6.jpg" alt="Trigger Point Therapy batch photo" class="course-photo">
                                        </div>
                                    </div>

                                    <hr class="my-3">
                                    <h6 class="fw-semibold accent-color mb-2">Schedule</h6>
                                    <div class="table-responsive course-table-wrap mb-3">
                                        <table class="table table-sm table-bordered course-schedule-table has-hours-col mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width:150px; white-space:nowrap;">Time</th>
                                                    <th>Contents</th>
                                                    <th style="width:150px; white-space:nowrap;">Hours</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>9:30 AM &ndash; 10:30 AM</td>
                                                    <td>Introduction to trigger points, physiology and mechanism of pain referral</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>10:30 AM &ndash; 11:30 AM</td>
                                                    <td>Identifying trigger points with palpation of muscles</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>11:30 AM &ndash; 1:30 PM</td>
                                                    <td>Demonstration of trigger point therapy for commonly affected upper quadrant muscles</td>
                                                    <td>2 hours</td>
                                                </tr>
                                                <tr>
                                                    <td>1:30 PM &ndash; 2:00 PM</td>
                                                    <td>Lunch</td>
                                                    <td>30 minutes</td>
                                                </tr>
                                                <tr>
                                                    <td>2:00 PM &ndash; 4:30 PM</td>
                                                    <td>Demonstration of trigger point therapy for commonly affected lower quadrant muscles</td>
                                                    <td>2 hours</td>
                                                </tr>
                                                <tr>
                                                    <td>4:30 PM &ndash; 5:00 PM</td>
                                                    <td>Clinical case discussion for common musculoskeletal conditions</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>5:00 PM &ndash; 5:30 PM</td>
                                                    <td>Discussion and certificate distribution</td>
                                                    <td>30 minutes</td>
                                                </tr>
                                                <tr class="fw-semibold">
                                                    <td colspan="2">Total Credit Hours</td>
                                                    <td>8 hours</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Course 7: Therapeutic Taping -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#other2" aria-expanded="false" aria-controls="other2">
                                    <span class="course-icon-wrap">
                                        <img src="image/award.png" alt="Therapeutic Taping" width="32" height="32">
                                    </span>
                                    <span class="flex-grow-1 text-start">Certificate in Therapeutic Taping</span>
                                    <span class="course-badge me-3">1 Day &bull; 8 Credit Hours</span>
                                </button>
                            </h2>
                            <div id="other2" class="accordion-collapse collapse" data-bs-parent="#otherAccordion">
                                <div class="accordion-body">
                                    <div class="row g-4 align-items-start">
                                        <div class="col-md-8">
                                            <h6 class="fw-semibold accent-color mb-2">Course Objectives</h6>
                                            <ul class="ps-3 mb-3 text-justify">
                                                <li>Understand the principles and theory behind Therapeutic taping</li>
                                                <li>Develop hands-on skills in taping techniques</li>
                                                <li>Enhance injury prevention and support strategies</li>
                                                <li>Improve clinical decision making</li>
                                                <li>Integrate taping into clinical practice</li>
                                            </ul>
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <span class="course-badge"><i class="fa-solid fa-certificate"></i> Certificate</span>
                                                <span class="course-badge"><i class="fa-solid fa-file-lines"></i> Transcript</span>
                                                <span class="course-badge"><i class="fa-solid fa-tape"></i> Therapeutic Tape</span>
                                                <span class="course-badge"><i class="fa-solid fa-book"></i> Study Material</span>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <a href="" class="btn font-1 fw-semibold accent-color-1" data-bs-toggle="modal"
                                                    data-bs-target="#registerModal">Register Now <i class="fa-solid fa-arrow-right"></i></a>
                                                <a href="course.php?course=therapeutic-taping" class="font-2 fw-semibold" target="_blank"><i class="fa-solid fa-link"></i> Direct link to this course</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="image/certificate-batch/Picture7.jpg" alt="Therapeutic Taping batch photo" class="course-photo">
                                        </div>
                                    </div>

                                    <hr class="my-3">
                                    <h6 class="fw-semibold accent-color mb-2">Schedule</h6>
                                    <div class="table-responsive course-table-wrap mb-3">
                                        <table class="table table-sm table-bordered course-schedule-table has-hours-col mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width:150px; white-space:nowrap;">Time</th>
                                                    <th>Contents</th>
                                                    <th style="width:150px; white-space:nowrap;">Hours</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>9:30 AM &ndash; 10:30 AM</td>
                                                    <td>Introduction to therapeutic taping concepts</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>10:30 AM &ndash; 11:00 AM</td>
                                                    <td>Taping for shoulder conditions like subluxation, rotator cuff injury, frozen shoulder, trapezitis and A/C joint arthritis</td>
                                                    <td>30 minutes</td>
                                                </tr>
                                                <tr>
                                                    <td>11:00 AM &ndash; 12:00 PM</td>
                                                    <td>Taping for elbow ligament injury, tennis elbow, golfer's elbow, hyperextension elbow; wrist ligament injury, hairline finger fracture and TFCC</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>12:00 PM &ndash; 1:00 PM</td>
                                                    <td>Taping for sacroiliac joint dysfunction, piriformis syndrome, hip OA and IT band friction syndrome</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>1:00 PM &ndash; 2:00 PM</td>
                                                    <td>Lunch</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>2:00 PM &ndash; 3:00 PM</td>
                                                    <td>Taping for knee ligament injury (ACL, PCL, MCL, LCL), OA knee, patellofemoral joint syndrome, fat pad impingement and genu recurvatum</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>3:00 PM &ndash; 4:00 PM</td>
                                                    <td>Taping for ankle ligament injury, plantar fasciitis, calcaneal spur, pes planus and deformities</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>4:00 PM &ndash; 5:00 PM</td>
                                                    <td>Taping for neck pain, midback pain and lower back pain</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>5:00 PM &ndash; 5:30 PM</td>
                                                    <td>Discussion and certificate distribution</td>
                                                    <td>30 minutes</td>
                                                </tr>
                                                <tr class="fw-semibold">
                                                    <td colspan="2">Total Credit Hours</td>
                                                    <td>8 hours</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Course 8: Myofascial Release -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#other3" aria-expanded="false" aria-controls="other3">
                                    <span class="course-icon-wrap">
                                        <img src="image/award.png" alt="Myofascial Release" width="32" height="32">
                                    </span>
                                    <span class="flex-grow-1 text-start">Certificate in Myofascial Release</span>
                                    <span class="course-badge me-3">1 Day &bull; 8 Credit Hours</span>
                                </button>
                            </h2>
                            <div id="other3" class="accordion-collapse collapse" data-bs-parent="#otherAccordion">
                                <div class="accordion-body">
                                    <div class="row g-4 align-items-start">
                                        <div class="col-md-8">
                                            <h6 class="fw-semibold accent-color mb-2">Course Objectives</h6>
                                            <ul class="ps-3 mb-3 text-justify">
                                                <li>Examine exercises that help enhance palpation</li>
                                                <li>Assess postural imbalances arising from fascial tightness or restrictions</li>
                                                <li>Detect areas with fascial limitations</li>
                                                <li>Distinguish between soft tissue mobilization methods and myofascial release approaches</li>
                                                <li>Acquire and practice myofascial release techniques for the lumbosacral region, chest, neck and both upper and lower limbs</li>
                                                <li>Demonstrate treatment techniques for various musculoskeletal disorders and sports injuries using myofascial release methods</li>
                                            </ul>
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <span class="course-badge"><i class="fa-solid fa-certificate"></i> Certificate</span>
                                                <span class="course-badge"><i class="fa-solid fa-file-lines"></i> Transcript</span>
                                                <span class="course-badge"><i class="fa-solid fa-book"></i> Study Material</span>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <a href="" class="btn font-1 fw-semibold accent-color-1" data-bs-toggle="modal"
                                                    data-bs-target="#registerModal">Register Now <i class="fa-solid fa-arrow-right"></i></a>
                                                <a href="course.php?course=myofascial-release" class="font-2 fw-semibold" target="_blank"><i class="fa-solid fa-link"></i> Direct link to this course</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="image/certificate-batch/Picture8.jpg" alt="Myofascial Release batch photo" class="course-photo">
                                        </div>
                                    </div>

                                    <hr class="my-3">
                                    <h6 class="fw-semibold accent-color mb-2">Schedule</h6>
                                    <div class="table-responsive course-table-wrap mb-3">
                                        <table class="table table-sm table-bordered course-schedule-table has-hours-col mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width:150px; white-space:nowrap;">Time</th>
                                                    <th>Contents</th>
                                                    <th style="width:110px; white-space:nowrap;">Hours</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>9:30 AM &ndash; 10:00 AM</td>
                                                    <td>Introduction to the myofascial system</td>
                                                    <td>30 minutes</td>
                                                </tr>
                                                <tr>
                                                    <td>10:00 AM &ndash; 12:00 Noon</td>
                                                    <td>Evaluating postural mal-alignment in low back pain, cervical spondylosis, scoliosis, OA knee, plantar fasciitis, trapezitis, bursitis, cervicogenic headache and more</td>
                                                    <td>2 hours</td>
                                                </tr>
                                                <tr>
                                                    <td>12:00 PM &ndash; 1:00 PM</td>
                                                    <td>Hands-on practice for myofascial techniques</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>1:00 PM &ndash; 2:00 PM</td>
                                                    <td>Lunch</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>2:00 PM &ndash; 5:00 PM</td>
                                                    <td>Hands-on practice for myofascial techniques</td>
                                                    <td>3 hours</td>
                                                </tr>
                                                <tr>
                                                    <td>5:00 PM &ndash; 5:30 PM</td>
                                                    <td>Clinical case scenarios and certificate distribution</td>
                                                    <td>30 minutes</td>
                                                </tr>
                                                <tr class="fw-semibold">
                                                    <td colspan="2">Total Credit Hours</td>
                                                    <td>8 hours</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Course 9: Differential Diagnosis -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#other4" aria-expanded="false" aria-controls="other4">
                                    <span class="course-icon-wrap">
                                        <img src="image/award.png" alt="Differential Diagnosis" width="32" height="32">
                                    </span>
                                    <span class="flex-grow-1 text-start">Certificate in Differential Diagnosis for Musculoskeletal Disorders</span>
                                    <span class="course-badge me-3">1 Day &bull; 8 Credit Hours</span>
                                </button>
                            </h2>
                            <div id="other4" class="accordion-collapse collapse" data-bs-parent="#otherAccordion">
                                <div class="accordion-body">
                                    <div class="row g-4 align-items-start">
                                        <div class="col-md-8">
                                            <p class="text-justify">This one-day workshop equips clinicians with tools to distinguish between mechanical pain, inflammatory diseases, nerve-related pain and serious pathologies (red flags), covering screening, clinical assessment techniques and key diagnostic criteria for common and complex disorders.</p>
                                            <h6 class="fw-semibold accent-color mb-2">Course Objectives</h6>
                                            <ul class="ps-3 mb-3 text-justify">
                                                <li>Understand the principles of differential diagnosis and classify musculoskeletal disorders based on mechanical, inflammatory, neurological and systemic presentations</li>
                                                <li>Develop structured clinical reasoning skills to differentiate common disorders affecting the shoulder, elbow, wrist, hip, knee, ankle and spine</li>
                                                <li>Identify red flags and serious pathologies requiring urgent medical referral</li>
                                                <li>Enhance clinical assessment and diagnostic accuracy by integrating history, examination findings and special tests</li>
                                                <li>Apply differential diagnosis principles to real clinical cases</li>
                                            </ul>
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <span class="course-badge"><i class="fa-solid fa-certificate"></i> Certificate</span>
                                                <span class="course-badge"><i class="fa-solid fa-file-lines"></i> Transcript</span>
                                                <span class="course-badge"><i class="fa-solid fa-book"></i> Study Material</span>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <a href="" class="btn font-1 fw-semibold accent-color-1" data-bs-toggle="modal"
                                                    data-bs-target="#registerModal">Register Now <i class="fa-solid fa-arrow-right"></i></a>
                                                <a href="course.php?course=differential-diagnosis" class="font-2 fw-semibold" target="_blank"><i class="fa-solid fa-link"></i> Direct link to this course</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="image/certificate-batch/Picture9.jpg" alt="Differential Diagnosis for Musculoskeletal Disorders batch photo" class="course-photo">
                                        </div>
                                    </div>

                                    <hr class="my-3">
                                    <h6 class="fw-semibold accent-color mb-2">Schedule</h6>
                                    <div class="table-responsive course-table-wrap mb-3">
                                        <table class="table table-sm table-bordered course-schedule-table has-hours-col mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width:150px; white-space:nowrap;">Time</th>
                                                    <th>Contents</th>
                                                    <th style="width:150px; white-space:nowrap;">Hours</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>9:30 AM &ndash; 10:30 AM</td>
                                                    <td>Introduction to classification of differential diagnosis</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>10:30 AM &ndash; 11:30 AM</td>
                                                    <td>Differential diagnosis for shoulder, elbow and wrist disorders</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>11:30 AM &ndash; 11:45 AM</td>
                                                    <td>Coffee break</td>
                                                    <td>15 minutes</td>
                                                </tr>
                                                <tr>
                                                    <td>11:45 AM &ndash; 1:00 PM</td>
                                                    <td>Differential diagnosis for hip, knee and ankle disorders</td>
                                                    <td>1 hour 15 minutes</td>
                                                </tr>
                                                <tr>
                                                    <td>1:00 PM &ndash; 2:00 PM</td>
                                                    <td>Lunch break</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>2:00 PM &ndash; 4:00 PM</td>
                                                    <td>Differential diagnosis for spine disorders</td>
                                                    <td>2 hours</td>
                                                </tr>
                                                <tr>
                                                    <td>4:00 PM &ndash; 5:00 PM</td>
                                                    <td>Clinical case discussions with real examples</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>5:00 PM &ndash; 5:30 PM</td>
                                                    <td>Certificate distribution</td>
                                                    <td>30 minutes</td>
                                                </tr>
                                                <tr class="fw-semibold">
                                                    <td colspan="2">Total Credit Hours</td>
                                                    <td>8 hours</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Course 10: PNF Techniques -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#other5" aria-expanded="false" aria-controls="other5">
                                    <span class="course-icon-wrap">
                                        <img src="image/award.png" alt="PNF Techniques" width="32" height="32">
                                    </span>
                                    <span class="flex-grow-1 text-start">Management of Sports Injuries &amp; MSK Disorders using PNF Techniques</span>
                                    <span class="course-badge me-3">1 Day &bull; 8 Credit Hours</span>
                                </button>
                            </h2>
                            <div id="other5" class="accordion-collapse collapse" data-bs-parent="#otherAccordion">
                                <div class="accordion-body">
                                    <div class="row g-4 align-items-start">
                                        <div class="col-md-8">
                                            <p class="text-justify">This one-day workshop emphasizes practical, hands-on Proprioceptive Neuromuscular Facilitation (PNF) techniques to enhance athlete performance, rehabilitation and injury prevention. Participants learn hold-relax, contract-relax and rhythmic stabilization for conditions such as strains, sprains, ACL instability, shoulder impingement, scapular dyskinesis and low back pain.</p>
                                            <h6 class="fw-semibold accent-color mb-2">Objectives</h6>
                                            <ul class="ps-3 mb-3 text-justify">
                                                <li>Master PNF patterns and techniques (hold-relax, contract-relax, rhythmic initiation) for improving ROM, strength and neuromuscular control</li>
                                                <li>Apply principles to functional sports movements like gait retraining, dynamic stabilization and upper/lower extremity patterns</li>
                                                <li>Integrate PNF with clinical reasoning for orthopedic and sports rehab, addressing autogenic/reciprocal inhibition</li>
                                            </ul>
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <span class="course-badge"><i class="fa-solid fa-certificate"></i> Certificate</span>
                                                <span class="course-badge"><i class="fa-solid fa-file-lines"></i> Transcript</span>
                                                <span class="course-badge"><i class="fa-solid fa-book"></i> Study Material</span>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <a href="" class="btn font-1 fw-semibold accent-color-1" data-bs-toggle="modal"
                                                    data-bs-target="#registerModal">Register Now <i class="fa-solid fa-arrow-right"></i></a>
                                                <a href="course.php?course=pnf-techniques" class="font-2 fw-semibold" target="_blank"><i class="fa-solid fa-link"></i> Direct link to this course</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="image/certificate-batch/Picture10.jpg" alt="Management of Sports Injuries and Musculoskeletal Disorders using PNF Techniques batch photo" class="course-photo">
                                        </div>
                                    </div>

                                    <hr class="my-3">
                                    <h6 class="fw-semibold accent-color mb-2">Schedule</h6>
                                    <div class="table-responsive course-table-wrap mb-3">
                                        <table class="table table-sm table-bordered course-schedule-table has-hours-col mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width:150px; white-space:nowrap;">Time</th>
                                                    <th>Contents</th>
                                                    <th style="width:150px; white-space:nowrap;">Hours</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>9:30 AM &ndash; 10:30 AM</td>
                                                    <td>Introduction to management of sports injuries &amp; musculoskeletal disorders using PNF techniques</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>10:30 AM &ndash; 11:30 AM</td>
                                                    <td>PNF technique application for scapular dysfunction like rotator cuff impingement and scapular dyskinesis</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>11:30 AM &ndash; 12:30 PM</td>
                                                    <td>PNF technique application for sports injuries in the hip region</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>12:30 PM &ndash; 1:30 PM</td>
                                                    <td>Lunch</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>1:30 PM &ndash; 3:00 PM</td>
                                                    <td>PNF technique application for ACL instability and knee pain</td>
                                                    <td>1 hour 30 minutes</td>
                                                </tr>
                                                <tr>
                                                    <td>3:00 PM &ndash; 4:00 PM</td>
                                                    <td>PNF technique application for low back ache syndrome</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>4:00 PM &ndash; 5:00 PM</td>
                                                    <td>Clinical case scenario of PNF application in sports injuries and musculoskeletal disorders</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>5:00 PM &ndash; 5:30 PM</td>
                                                    <td>Certificate distribution</td>
                                                    <td>30 minutes</td>
                                                </tr>
                                                <tr class="fw-semibold">
                                                    <td colspan="2">Total Credit Hours</td>
                                                    <td>8 hours</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Course 11: TSE -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#other6" aria-expanded="false" aria-controls="other6">
                                    <span class="course-icon-wrap">
                                        <img src="image/award.png" alt="TSE Chronic Pain" width="32" height="32">
                                    </span>
                                    <span class="flex-grow-1 text-start">Therapeutic Specific Exercise (TSE) for Chronic Pain Syndrome</span>
                                    <span class="course-badge me-3">1 Day &bull; 8 Credit Hours</span>
                                </button>
                            </h2>
                            <div id="other6" class="accordion-collapse collapse" data-bs-parent="#otherAccordion">
                                <div class="accordion-body">
                                    <div class="row g-4 align-items-start">
                                        <div class="col-md-8">
                                            <h6 class="fw-semibold accent-color mb-2">Course Objectives</h6>
                                            <ul class="ps-3 mb-3 text-justify">
                                                <li>Understand the principles of therapeutic specific exercise and their role in rehabilitation and pain management</li>
                                                <li>Assess movement dysfunctions and functional limitations to guide exercise selection</li>
                                                <li>Apply reasoning to prescribe condition-specific therapeutic exercises</li>
                                                <li>Design individualized exercise programs based on patient presentation, goals and stage of recovery</li>
                                                <li>Progress and regress exercises safely according to patient response and tissue tolerance</li>
                                                <li>Integrate therapeutic exercise into clinical practice to enhance functional outcomes and patient confidence</li>
                                                <li>Demonstrate improved competence in selecting and applying therapeutic specific exercises effectively</li>
                                            </ul>
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <span class="course-badge"><i class="fa-solid fa-certificate"></i> Certificate</span>
                                                <span class="course-badge"><i class="fa-solid fa-file-lines"></i> Transcript</span>
                                                <span class="course-badge"><i class="fa-solid fa-book"></i> Study Material</span>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <a href="" class="btn font-1 fw-semibold accent-color-1" data-bs-toggle="modal"
                                                    data-bs-target="#registerModal">Register Now <i class="fa-solid fa-arrow-right"></i></a>
                                                <a href="course.php?course=tse-chronic-pain" class="font-2 fw-semibold" target="_blank"><i class="fa-solid fa-link"></i> Direct link to this course</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <img src="image/certificate-batch/Picture11.jpg" alt="Therapeutic Specific Exercise for Chronic Pain Syndrome batch photo" class="course-photo">
                                        </div>
                                    </div>

                                    <hr class="my-3">
                                    <h6 class="fw-semibold accent-color mb-2">Schedule</h6>
                                    <div class="table-responsive course-table-wrap mb-3">
                                        <table class="table table-sm table-bordered course-schedule-table has-hours-col mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width:150px; white-space:nowrap;">Time</th>
                                                    <th>Contents</th>
                                                    <th style="width:150px; white-space:nowrap;">Hours</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>9:30 AM &ndash; 10:30 AM</td>
                                                    <td>Introduction to therapeutic specific exercise and chronic pain syndrome</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>10:30 AM &ndash; 11:30 AM</td>
                                                    <td>Pain modulation</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>11:30 AM &ndash; 12:30 PM</td>
                                                    <td>Restoration of movement and function</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>12:30 PM &ndash; 1:30 PM</td>
                                                    <td>Muscle performance movement on various conditions</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>1:30 PM &ndash; 2:00 PM</td>
                                                    <td>Lunch</td>
                                                    <td>30 minutes</td>
                                                </tr>
                                                <tr>
                                                    <td>2:00 PM &ndash; 3:00 PM</td>
                                                    <td>Exercise prescription for upper quadrant dysfunction</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>3:00 PM &ndash; 4:00 PM</td>
                                                    <td>Exercise prescription for lower quadrant dysfunction</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>4:00 PM &ndash; 5:00 PM</td>
                                                    <td>Clinical case discussion for common musculoskeletal and sports conditions</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>5:00 PM &ndash; 5:30 PM</td>
                                                    <td>Discussion and certificate distribution</td>
                                                    <td>30 minutes</td>
                                                </tr>
                                                <tr class="fw-semibold">
                                                    <td colspan="2">Total Credit Hours</td>
                                                    <td>8 hours</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                         <!-- Course 12: TSE -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#other7" aria-expanded="false" aria-controls="other7">
                                    <span class="course-icon-wrap">
                                        <img src="image/award.png" alt="TSE Chronic Pain" width="32" height="32">
                                    </span>
                                    <span class="flex-grow-1 text-start">Certificate Course in Belt Mobilisation for Peripheral Joints</span>
                                    <span class="course-badge me-3">1 Day &bull; 8 Credit Hours</span>
                                </button>
                            </h2>
                            <div id="other7" class="accordion-collapse collapse" data-bs-parent="#otherAccordion">
                                <div class="accordion-body">
                                    <div class="row g-4 align-items-start">
                                        <div class="col-md-8">
                                            <h6 class="fw-semibold accent-color mb-2">Course Objectives</h6>
                                            <ul class="ps-3 mb-3 text-justify">
                                                 <li>To understand the principles and clinical applications of belt mobilisation for peripheral joints.</li>
                                                 <li>To perform appropriate joint assessment, patient positioning, and technique selection.</li>
                                                 <li>To apply belt mobilisation techniques safely to the shoulder, hip, knee, ankle, and other peripheral joints.</li>
                                                 <li>To use belt mobilisation to address pain, stiffness, and restricted joint movement.</li>
                                                 <li>To demonstrate safe and confident clinical application through hands-on practical training.</li>
                                            </ul>
                                            <div class="d-flex flex-wrap gap-2 mb-3">
                                                <span class="course-badge"><i class="fa-solid fa-certificate"></i> Certificate</span>
                                                <span class="course-badge"><i class="fa-solid fa-file-lines"></i> Transcript</span>
                                                <span class="course-badge"><i class="fa-solid fa-book"></i> Study Material</span>
                                            </div>
                                            <div class="d-flex flex-wrap gap-3 align-items-center">
                                                <a href="" class="btn font-1 fw-semibold accent-color-1" data-bs-toggle="modal"
                                                    data-bs-target="#registerModal">Register Now <i class="fa-solid fa-arrow-right"></i></a>
                                                <a href="course.php?course=belt-mobilisation-peripheral-joints" class="font-2 fw-semibold" target="_blank"><i class="fa-solid fa-link"></i> Direct link to this course</a>
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <hr class="my-3">
                                    <h6 class="fw-semibold accent-color mb-2">Schedule</h6>
                                    <div class="table-responsive course-table-wrap mb-3">
                                        <table class="table table-sm table-bordered course-schedule-table has-hours-col mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width:150px; white-space:nowrap;">Time</th>
                                                    <th>Contents</th>
                                                    <th style="width:150px; white-space:nowrap;">Hours</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>9:30 AM &ndash; 10:30 AM</td>
                                                    <td>Introduction to Belt Mobilisation &amp; Concept — principles, biomechanics, indications, contraindications and application of belts</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>10:30 AM &ndash; 11:30 AM</td>
                                                    <td>Belt Mobilisation for Shoulder Dysfunctions</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>11:30 AM &ndash; 12:30 PM</td>
                                                    <td>Belt Mobilisation for Elbow Disorders</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>12:30 PM &ndash; 1:30 PM</td>
                                                    <td>Belt Mobilisation for Hip Disorders</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>1:30 PM &ndash; 2:30 PM</td>
                                                    <td>Lunch</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>2:30 PM &ndash; 3:30 PM</td>
                                                    <td>Belt Mobilisation for Knee Dysfunctions</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>3:30 PM &ndash; 4:30 PM</td>
                                                    <td>Belt Mobilisation for Ankle Dysfunctions</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                <tr>
                                                    <td>4:30 PM &ndash; 5:30 PM</td>
                                                    <td>Questions & Answers & Certificate Distribution</td>
                                                    <td>1 hour</td>
                                                </tr>
                                                
                                                <tr class="fw-semibold">
                                                    <td colspan="2">Total Credit Hours</td>
                                                    <td>8 hours</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h6>What will you get ?</h6>
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                                <span class="course-badge"> Study material </span>
                                                <span class="course-badge"> Belt</span>
                                                <span class="course-badge"> Certificate </span>
                                                <span class="course-badge"> Transcript  </span>
                                            </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <p class="mt-4 text-center font-2"><strong>Course Instructor:</strong> Prof.(Dr). K.Pearlson, MPT (AUS) &mdash; Emeritus Professor, Founder - Federation of Indian Manual Therapists, Director - Shree Saradha Academy, Consultant - Pain Management and Wellness center, Bangalore</p>
            <p class="mt-2 text-center font-2"><strong>Venue:</strong> Shree Saradha Academy, Pain Management and Wellness Center, 1032, 2nd Main, Vijayanagar, Bangalore</p>
            <p class="mt-2 text-center font-2 fw-semibold">Please contact 8088206973 for course registration and dates</p>
        </div>
    </section>
</main>

<script>
    function openCourseFromHash() {
        var id = window.location.hash ? window.location.hash.substring(1) : '';
        if (!id) return;
        var collapseEl = document.getElementById(id);
        if (!collapseEl || !collapseEl.classList.contains('accordion-collapse')) return;

        var pane = collapseEl.closest('.tab-pane');
        if (pane) {
            var tabButton = document.querySelector('button[data-bs-target="#' + pane.id + '"]');
            if (tabButton) {
                bootstrap.Tab.getOrCreateInstance(tabButton).show();
            }
        }

        bootstrap.Collapse.getOrCreateInstance(collapseEl, {
            toggle: false
        }).show();

        setTimeout(function() {
            collapseEl.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }, 300);
    }

    document.addEventListener('DOMContentLoaded', openCourseFromHash);
    window.addEventListener('hashchange', openCourseFromHash);
</script>

<?php include "footer.php"; ?>