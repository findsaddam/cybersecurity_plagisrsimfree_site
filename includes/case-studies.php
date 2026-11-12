<?php
function renderCaseStudiesIndex(array $caseStudies, array $subjects): void {
    $page = [
        'page_type' => 'case_study_index',
        'title' => 'Solved Assignments',
        'meta_title' => 'Solved Cybersecurity Assignments | Cyber Assignment Pro',
        'h1' => 'Solved Cybersecurity Assignments',
        'description' => 'Solved cybersecurity assignments and practical case studies covering cryptography, digital signatures, vulnerability analysis and authorised security labs.',
        'primary' => 'solved cybersecurity assignments',
        'nav' => 'Case Studies',
    ];
    renderHead($page, SITE_URL . '/case-studies', $subjects);
    renderHeader($subjects, $caseStudies); ?>
<main class="blog-index-page">
    <section class="blog-index-head">
        <div class="container blog-shell">
            <div class="breadcrumbs"><a href="/">Home</a><span>/</span><span>Case Studies</span></div>
            <span class="section-kicker">Solved Assignments</span>
            <h1>Solved Cybersecurity Assignments</h1>
        </div>
    </section>
    <section class="blog-list-section">
        <div class="container blog-shell">
            <div class="blog-list">
                <?php foreach($caseStudies as $slug=>$case): ?>
                <article class="blog-list-card">
                    <span class="blog-list-card__label"><?=e($case['eyebrow'])?></span>
                    <h2><a href="/case-studies/<?=e($slug)?>"><?=e($case['nav'])?></a></h2>
                    <p><?=e($case['topic_q2'] ?? '')?> · <?=e($case['topic_q3'] ?? '')?> · <?=e($case['tool_q3'] ?? '')?></p>
                    <a class="text-link" href="/case-studies/<?=e($slug)?>">Read assignment <?=icon('arrow',16)?></a>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
<?php renderFooter($subjects);
}


function renderCaseStudyCTA(string $placement='mid'): void { ?>
<section class="case-conversion-cta case-conversion-cta--<?=e($placement)?>">
    <span class="case-conversion-cta__kicker">Need support with a similar task?</span>
    <h2>Need help with a similar assignment or project?</h2>
    <p>Send your assignment brief, marking rubric or existing work for originality-focused support, technical review, troubleshooting and project guidance tailored to your requirements.</p>
    <div class="case-conversion-cta__actions">
        <a class="btn btn--primary" href="<?=e(waLink('similar cybersecurity assignment or project'))?>" target="_blank" rel="noopener">Discuss Your Assignment <?=icon('arrow',17)?></a>
        <a class="btn btn--ghost" href="/#subjects">Explore Subjects</a>
    </div>
</section>
<?php }

function renderActiveDirectoryCaseStudy(string $slug, array $case, array $caseStudies, array $subjects): void {
    $canonical=SITE_URL . '/case-studies/' . $slug;
    renderHead($case,$canonical,$subjects);
    renderHeader($subjects,$caseStudies);

    $phases = [
        ['01','Build the Virtual Lab','Requirements 1 to 6','Steps 1 to 4'],
        ['02','Create OU, Users and Shared Folder','Requirements 11 to 15','Steps 5 to 7'],
        ['03','Join Windows 11 to the Domain','Requirements 7, 9, 10 and 17','Steps 8 to 9'],
        ['04','Join Fedora to Active Directory','Requirements 8, 9, 10 and 18','Steps 10 to 11'],
        ['05','Verify Shared Folder Access','Requirements 16, 19 and 20','Steps 12 to 13'],
    ];
    ?>
<main class="blog-page case-study-learning-page">
    <section class="blog-article-head case-learning-hero">
        <div class="container blog-shell">
            <div class="breadcrumbs"><a href="/">Home</a><span>/</span><a href="/case-studies">Case Studies</a><span>/</span><span><?=e($case['nav'])?></span></div>
            <span class="blog-label"><?=e($case['eyebrow'])?></span>
            <h1><?=e($case['h1'])?></h1>
            <p class="case-learning-intro"><?=e($case['objective'])?></p>
            <div class="blog-topic-line"><?=e($case['topic_q2'])?> <span>•</span> <?=e($case['topic_q3'])?> <span>•</span> <?=e($case['tool_q3'])?></div>
        </div>
    </section>

    <section class="case-snapshot-section">
        <div class="container blog-shell">
            <div class="case-snapshot-grid">
                <div class="case-snapshot-card"><span>Server</span><strong>Windows Server 2022 Datacenter GUI</strong></div>
                <div class="case-snapshot-card"><span>Windows client</span><strong>Windows 11 Pro</strong></div>
                <div class="case-snapshot-card"><span>Linux client</span><strong>Fedora Workstation</strong></div>
                <div class="case-snapshot-card"><span>Domain used in solution</span><strong>college.local</strong></div>
                <div class="case-snapshot-card"><span>Organizational Unit</span><strong>Accounts</strong></div>
                <div class="case-snapshot-card"><span>Shared folder</span><strong>AuditFile</strong></div>
            </div>
        </div>
    </section>

    <section class="blog-body-section">
        <div class="container blog-layout">
            <article class="blog-article">
                <section id="overview">
                    <div class="case-section-heading">
                        <span class="case-section-number">00</span>
                        <div><span class="mini-label">Start here</span><h2>Assignment Overview</h2></div>
                    </div>
                    <p><?=e($case['objective'])?></p>

                    <h3>Marking Scheme</h3>
                    <div class="case-grade-grid">
                        <?php foreach($case['grading'] as $row): ?>
                        <div class="case-grade-card"><span><?=e($row[0])?></span><strong><?=e($row[1])?></strong></div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <section id="requirement-map">
                    <div class="case-section-heading">
                        <span class="case-section-number">01</span>
                        <div><span class="mini-label">Understand the brief</span><h2>Requirement → Solution Map</h2></div>
                    </div>
                    <div class="requirement-map">
                        <?php foreach($phases as $phase): ?>
                        <a class="requirement-map-row" href="#phase-<?=e($phase[0])?>">
                            <span class="requirement-map-row__num"><?=e($phase[0])?></span>
                            <div><strong><?=e($phase[1])?></strong><small><?=e($phase[2])?> → <?=e($phase[3])?></small></div>
                            <span class="requirement-map-row__arrow"><?=icon('arrow',17)?></span>
                        </a>
                        <?php endforeach; ?>
                    </div>

                    <details class="case-command-box">
                        <summary>View all 20 assignment requirements</summary>
                        <div><ol><?php foreach($case['requirements'] as $item): ?><li><?=e($item)?></li><?php endforeach; ?></ol></div>
                    </details>
                </section>

                <section id="phase-01">
                    <div class="case-section-heading">
                        <span class="case-section-number">02</span>
                        <div><span class="mini-label">Solution from the supplied implementation file</span><h2>Build the Virtual Lab and Domain Controller</h2></div>
                    </div>
                    <?php foreach(array_slice($case['implementation_steps'],0,4) as $step): ?>
                    <section class="learning-step">
                        <div class="learning-step__head"><span><?=e(substr($step['title'],5,2))?></span><div><small>Implementation</small><h3><?=e($step['title'])?></h3></div></div>
                        <div class="case-detail-block"><ul><?php foreach($step['lines'] as $line): ?><li><?=e($line)?></li><?php endforeach; ?></ul></div>
                    </section>
                    <?php endforeach; ?>
                </section>

                <?php renderCaseStudyCTA('mid'); ?>

                <section id="phase-02">
                    <div class="case-section-heading">
                        <span class="case-section-number">03</span>
                        <div><span class="mini-label">Active Directory administration</span><h2>Create the OU, Users and Shared Folder</h2></div>
                    </div>
                    <?php foreach(array_slice($case['implementation_steps'],4,3) as $step): ?>
                    <section class="learning-step">
                        <div class="learning-step__head"><span><?=e(substr($step['title'],5,2))?></span><div><small>Implementation</small><h3><?=e($step['title'])?></h3></div></div>
                        <div class="case-detail-block"><ul><?php foreach($step['lines'] as $line): ?><li><?=e($line)?></li><?php endforeach; ?></ul></div>
                    </section>
                    <?php endforeach; ?>
                </section>

                <section id="phase-03">
                    <div class="case-section-heading">
                        <span class="case-section-number">04</span>
                        <div><span class="mini-label">Windows client</span><h2>Install Windows 11 and Join the Domain</h2></div>
                    </div>
                    <?php foreach(array_slice($case['implementation_steps'],7,2) as $step): ?>
                    <section class="learning-step">
                        <div class="learning-step__head"><span><?=e(substr($step['title'],5,2))?></span><div><small>Implementation</small><h3><?=e($step['title'])?></h3></div></div>
                        <div class="case-detail-block"><ul><?php foreach($step['lines'] as $line): ?><li><?=e($line)?></li><?php endforeach; ?></ul></div>
                    </section>
                    <?php endforeach; ?>
                </section>

                <section id="phase-04">
                    <div class="case-section-heading">
                        <span class="case-section-number">05</span>
                        <div><span class="mini-label">Linux client</span><h2>Install Fedora and Join Active Directory</h2></div>
                    </div>
                    <?php foreach(array_slice($case['implementation_steps'],9,2) as $step): ?>
                    <section class="learning-step">
                        <div class="learning-step__head"><span><?=e(substr($step['title'],5,2))?></span><div><small>Implementation</small><h3><?=e($step['title'])?></h3></div></div>
                        <div class="case-detail-block"><ul><?php foreach($step['lines'] as $line): ?><li><?=e($line)?></li><?php endforeach; ?></ul></div>
                    </section>
                    <?php endforeach; ?>
                </section>

                <section id="phase-05">
                    <div class="case-section-heading">
                        <span class="case-section-number">06</span>
                        <div><span class="mini-label">Cross-platform verification</span><h2>Verify AuditFile Access from Both Clients</h2></div>
                    </div>
                    <?php foreach(array_slice($case['implementation_steps'],11,2) as $step): ?>
                    <section class="learning-step">
                        <div class="learning-step__head"><span><?=e(substr($step['title'],5,2))?></span><div><small>Implementation</small><h3><?=e($step['title'])?></h3></div></div>
                        <div class="case-detail-block"><ul><?php foreach($step['lines'] as $line): ?><li><?=e($line)?></li><?php endforeach; ?></ul></div>
                    </section>
                    <?php endforeach; ?>

                    <h3>Required Screenshot Evidence</h3>
                    <div class="student-takeaway-list">
                        <?php foreach($case['deliverables'] as $i=>$item): ?>
                        <div><span><?=str_pad((string)($i+1),2,'0',STR_PAD_LEFT)?></span><p><?=e($item)?></p></div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <section id="verification">
                    <div class="case-section-heading">
                        <span class="case-section-number">07</span>
                        <div><span class="mini-label">Answers from the completed solution</span><h2>Verification Questions and Answers</h2></div>
                    </div>
                    <?php foreach($case['verification'] as $i=>$qa): ?>
                    <div class="case-key-finding">
                        <span>Question <?=e((string)($i+1))?></span>
                        <strong><?=e($qa[0])?></strong>
                        <p><?=e($qa[1])?></p>
                    </div>
                    <?php endforeach; ?>
                </section>

                <?php renderCaseStudyCTA('footer'); ?>
            </article>

            <aside class="blog-sidebar">
                <div class="blog-sidebar-card">
                    <span class="mini-label">On this page</span>
                    <a href="#overview">Assignment Overview</a>
                    <a href="#requirement-map">Requirement → Solution Map</a>
                    <a href="#phase-01">Server & Domain Controller</a>
                    <a href="#phase-02">OU, Users & Shared Folder</a>
                    <a href="#phase-03">Windows 11 Domain Join</a>
                    <a href="#phase-04">Fedora Domain Join</a>
                    <a href="#phase-05">Shared Folder Verification</a>
                    <a href="#verification">Verification Q&A</a>
                </div>
                <div class="blog-sidebar-card">
                    <span class="mini-label">Related</span>
                    <?php foreach($case['related_links'] as $link): ?><a href="<?=e($link[0])?>"><?=e($link[1])?></a><?php endforeach; ?>
                </div>
            </aside>
        </div>
    </section>
</main>
<?php renderFooter($subjects);
}

function renderBufferOverflowCaseStudy(string $slug, array $case, array $caseStudies, array $subjects): void {
    $canonical=SITE_URL . '/case-studies/' . $slug;
    renderHead($case,$canonical,$subjects);
    renderHeader($subjects,$caseStudies);

    $learningSteps = [
        [
            'num' => '01',
            'title' => 'Setup the VM',
            'requirement' => $case['requirements'][0][1],
            'solution' => $case['safe_commands'][0][1] . ' | ' . $case['safe_commands'][1][1],
            'evidence' => $case['target'],
            'meaning' => $case['solution_steps'][0][1],
            'result' => $case['solution_steps'][0][1]
        ],
        [
            'num' => '02',
            'title' => 'Compile and Configure getscore',
            'requirement' => $case['requirements'][1][1],
            'solution' => $case['solution_steps'][0][1],
            'evidence' => 'The program was compiled, the required permissions were applied and the guest account was used to verify the setuid behaviour.',
            'meaning' => 'This proves why a later memory-safety failure has a much larger security impact: the vulnerable program executes with root effective privileges.',
            'result' => 'The setuid-root execution context was confirmed.'
        ],
        [
            'num' => '03',
            'title' => 'Trigger the Crash and Inspect GDB Evidence',
            'requirement' => $case['requirements'][2][1],
            'solution' => 'EIP = 0x41414141',
            'evidence' => $case['safe_commands'][2][1] . ' | ' . $case['safe_commands'][3][1] . ' | ' . $case['safe_commands'][4][1] . ' | ' . $case['safe_commands'][5][1],
            'meaning' => $case['eip_finding'],
            'result' => 'Saved EIP offset: 134 bytes'
        ],
        [
            'num' => '04',
            'title' => 'Build and Validate the Lab Exploit',
            'requirement' => $case['requirements'][3][1],
            'solution' => $case['result'],
            'evidence' => $case['result'],
            'meaning' => $case['payload_explanation'],
            'result' => $case['result']
        ],
    ];
    ?>
<main class="blog-page case-study-learning-page">
    <section class="blog-article-head case-learning-hero">
        <div class="container blog-shell">
            <div class="breadcrumbs"><a href="/">Home</a><span>/</span><a href="/case-studies">Case Studies</a><span>/</span><span><?=e($case['nav'])?></span></div>
            <span class="blog-label"><?=e($case['eyebrow'])?></span>
            <h1><?=e($case['h1'])?></h1>
            <p class="case-learning-intro">Understand the assignment first, then follow the completed solution step by step. Each stage below shows what was required, what evidence was produced, what that evidence means, and how it contributes to the final result.</p>
            <div class="blog-topic-line"><?=e($case['topic_q2'])?> <span>•</span> <?=e($case['topic_q3'])?> <span>•</span> <?=e($case['tool_q3'])?></div>
        </div>
    </section>

    <section class="case-snapshot-section">
        <div class="container blog-shell">
            <div class="case-snapshot-grid">
                <div class="case-snapshot-card"><span>Course</span><strong><?=e($case['course'])?></strong></div>
                <div class="case-snapshot-card"><span>Lab target</span><strong><?=e($case['target'])?></strong></div>
                <div class="case-snapshot-card"><span>Main finding</span><strong>Stack buffer overflow</strong></div>
                <div class="case-snapshot-card"><span>Extra finding</span><strong>OS command injection</strong></div>
                <div class="case-snapshot-card"><span>Key evidence</span><strong>EIP overwrite + 134-byte offset</strong></div>
                <div class="case-snapshot-card"><span>Final lab result</span><strong>Guest to root privilege escalation</strong></div>
            </div>
        </div>
    </section>

    <section class="blog-body-section">
        <div class="container blog-layout">
            <article class="blog-article">
                <section id="overview">
                    <div class="case-section-heading">
                        <span class="case-section-number">00</span>
                        <div><span class="mini-label">Start here</span><h2>Project Overview</h2></div>
                    </div>
                    <p><?=e($case['description'])?></p>
                    <div class="case-study-callout case-study-callout--safe"><strong>Authorised lab only</strong><p><?=e($case['public_safety_note'])?></p></div>
                </section>

                <section id="requirement-map">
                    <div class="case-section-heading">
                        <span class="case-section-number">01</span>
                        <div><span class="mini-label">Understand the brief</span><h2>Requirement → Solution Map</h2></div>
                    </div>
                    <p><?=e($case['requirements_intro'])?></p>
                    <div class="requirement-map">
                        <?php foreach($learningSteps as $step): ?>
                        <a class="requirement-map-row" href="#step-<?=e($step['num'])?>">
                            <span class="requirement-map-row__num"><?=e($step['num'])?></span>
                            <div><strong><?=e($step['title'])?></strong><small><?=e($step['requirement'])?></small></div>
                            <span class="requirement-map-row__arrow"><?=icon('arrow',17)?></span>
                        </a>
                        <?php endforeach; ?>
                    </div>

                    <h3>Grading Breakdown</h3>
                    <div class="case-grade-grid">
                        <?php foreach($case['grading'] as $row): ?>
                        <div class="case-grade-card"><span><?=e($row[0])?></span><strong><?=e($row[1])?></strong></div>
                        <?php endforeach; ?>
                    </div>
                    <div class="case-study-callout"><strong>What the report must contain</strong><p><?=e($case['report_requirement'])?></p></div>
                </section>

                <section id="step-by-step">
                    <div class="case-section-heading">
                        <span class="case-section-number">02</span>
                        <div><span class="mini-label">Requirement + solution together</span><h2>Step-by-Step Assignment Solution</h2></div>
                    </div>
                    <p><?=e($case['solution_intro'])?></p>

                    <?php foreach($learningSteps as $step): ?>
                    <section class="learning-step" id="step-<?=e($step['num'])?>">
                        <div class="learning-step__head">
                            <span><?=e($step['num'])?></span>
                            <div><small>Lab step</small><h3><?=e($step['title'])?></h3></div>
                        </div>

                        <div class="learning-step__grid">
                            <div class="learning-panel learning-panel--requirement">
                                <span class="learning-panel__label">What the assignment asked</span>
                                <p><?=e($step['requirement'])?></p>
                            </div>
                            <div class="learning-panel learning-panel--solution">
                                <span class="learning-panel__label">What the solution did</span>
                                <p><?=e($step['solution'])?></p>
                            </div>
                            <div class="learning-panel learning-panel--evidence">
                                <span class="learning-panel__label">Evidence</span>
                                <p><?=e($step['evidence'])?></p>
                            </div>
                            <div class="learning-panel learning-panel--meaning">
                                <span class="learning-panel__label">Why this matters</span>
                                <p><?=e($step['meaning'])?></p>
                            </div>
                        </div>
                        <div class="learning-step__result"><strong>Result</strong><span><?=e($step['result'])?></span></div>

                        <?php if($step['num']==='02'): ?>
                        <details class="case-command-box">
                            <summary>View the setup commands used in this lab</summary>
                            <div>
                                <?php foreach(array_slice($case['safe_commands'],0,2) as $cmd): ?>
                                <h4><?=e($cmd[0])?></h4>
                                <pre class="assignment-command"><code><?=e($cmd[1])?></code></pre>
                                <?php endforeach; ?>
                            </div>
                        </details>
                        <?php elseif($step['num']==='03'): ?>
                        <details class="case-command-box" open>
                            <summary>View the GDB evidence commands</summary>
                            <div>
                                <?php foreach(array_slice($case['safe_commands'],2) as $cmd): ?>
                                <h4><?=e($cmd[0])?></h4>
                                <pre class="assignment-command"><code><?=e($cmd[1])?></code></pre>
                                <?php endforeach; ?>
                            </div>
                        </details>
                        <div class="case-key-finding"><span>Key finding</span><strong>EIP = 0x41414141 → user input reached the saved instruction pointer</strong><p><?=e($case['eip_finding'])?></p></div>
                        <?php elseif($step['num']==='04'): ?>
                        <div class="case-concept-diagram" aria-label="Conceptual payload layout">
                            <span class="case-concept-diagram__padding">Controlled padding</span>
                            <span class="case-concept-diagram__eip">Saved EIP</span>
                            <span class="case-concept-diagram__landing">Landing space</span>
                            <span class="case-concept-diagram__code">Lab shellcode</span>
                        </div>
                        <p><?=e($case['payload_explanation'])?></p>
                        <?php endif; ?>
                    </section>
                    <?php endforeach; ?>
                </section>

                <?php renderCaseStudyCTA('mid'); ?>

                <section id="analysis">
                    <div class="case-section-heading">
                        <span class="case-section-number">03</span>
                        <div><span class="mini-label">Understand the vulnerability</span><h2>Why the Exploit Worked</h2></div>
                    </div>
                    <div class="case-grid">
                        <?php foreach($case['why_worked'] as $item): ?>
                        <div class="case-grid-card"><h3><?=e($item[0])?></h3><p><?=e($item[1])?></p></div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <section id="defenses">
                    <div class="case-section-heading">
                        <span class="case-section-number">04</span>
                        <div><span class="mini-label">Turn the exploit into defensive analysis</span><h2>Defenses That Would Have Prevented It</h2></div>
                    </div>
                    <div class="defense-list">
                        <?php foreach($case['defenses'] as $i=>$row): ?>
                        <div class="defense-row"><span><?=str_pad((string)($i+1),2,'0',STR_PAD_LEFT)?></span><div><strong><?=e($row[0])?></strong><p><?=e($row[1])?></p></div></div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <section id="extra-credit">
                    <div class="case-section-heading">
                        <span class="case-section-number">05</span>
                        <div><span class="mini-label">Separate vulnerability path</span><h2>Extra Credit: OS Command Injection Vulnerability</h2></div>
                    </div>
                    <p><?=e($case['extra_credit_intro'])?></p>
                    <div class="case-evidence-block">
                        <span class="learning-panel__label">Vulnerable logging path</span>
                        <pre class="assignment-output"><code><?=e($case['extra_credit_code'])?></code></pre>
                    </div>
                    <div class="learning-step__grid learning-step__grid--compact">
                        <div class="learning-panel learning-panel--requirement"><span class="learning-panel__label">Root cause</span><p>User-controlled values are inserted into a shell command and then passed to system().</p></div>
                        <div class="learning-panel learning-panel--meaning"><span class="learning-panel__label">Security impact</span><p><?=e($case['extra_credit_risk'])?></p></div>
                    </div>
                </section>

                <section id="takeaways">
                    <div class="case-section-heading">
                        <span class="case-section-number">06</span>
                        <div><span class="mini-label">Revision notes</span><h2>What Students Should Learn From This Project</h2></div>
                    </div>
                    <div class="student-takeaway-list">
                        <?php foreach($case['student_takeaways'] as $i=>$item): ?>
                        <div><span><?=str_pad((string)($i+1),2,'0',STR_PAD_LEFT)?></span><p><?=e($item)?></p></div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <?php renderCaseStudyCTA('footer'); ?>
            </article>

            <aside class="blog-sidebar">
                <div class="blog-sidebar-card">
                    <span class="mini-label">On this page</span>
                    <a href="#overview">Project Overview</a>
                    <a href="#requirement-map">Requirement → Solution Map</a>
                    <a href="#step-by-step">Step-by-Step Solution</a>
                    <a href="#analysis">Why It Worked</a>
                    <a href="#defenses">Defenses</a>
                    <a href="#extra-credit">Extra Credit Finding</a>
                    <a href="#takeaways">Student Takeaways</a>
                </div>
                <div class="blog-sidebar-card">
                    <span class="mini-label">Jump to lab step</span>
                    <?php foreach($learningSteps as $step): ?><a href="#step-<?=e($step['num'])?>"><?=e($step['num'])?> · <?=e($step['title'])?></a><?php endforeach; ?>
                </div>
                <div class="blog-sidebar-card">
                    <span class="mini-label">Related</span>
                    <?php foreach($case['related_links'] as $link): ?><a href="<?=e($link[0])?>"><?=e($link[1])?></a><?php endforeach; ?>
                </div>
            </aside>
        </div>
    </section>
</main>
<?php renderFooter($subjects);
}

function renderCaseStudy(string $slug, array $case, array $caseStudies, array $subjects): void {
    if(($case['template'] ?? '') === 'active_directory_lab'){
        renderActiveDirectoryCaseStudy($slug,$case,$caseStudies,$subjects);
        return;
    }
    if(($case['template'] ?? '') === 'buffer_overflow_getscore'){
        renderBufferOverflowCaseStudy($slug,$case,$caseStudies,$subjects);
        return;
    }

    $canonical=SITE_URL . '/case-studies/' . $slug;
    renderHead($case,$canonical,$subjects);
    renderHeader($subjects,$caseStudies);

    $learningSteps = [
        [
            'num' => '01',
            'title' => 'Explain the Double Ratchet Architecture',
            'requirement' => 'Explain the architecture and design of the Double Ratchet Algorithm, including the Diffie Hellman ratchet, symmetric key ratchet and message flow.',
            'solution' => $case['q2_intro'],
            'evidence' => 'The solution separates the design into the Diffie Hellman ratchet and the symmetric key ratchet, then shows the Alice-to-Bob message flow and a complete text diagram.',
            'meaning' => 'This makes it clear how root keys, chain keys and one-time message keys work together instead of treating the algorithm as a single black box.',
            'result' => 'The architecture is explained as two coordinated ratchets that continually derive new key material.'
        ],
        [
            'num' => '02',
            'title' => 'Explain the Security Properties',
            'requirement' => 'Explain how the design provides Forward Secrecy and Post Compromise Security.',
            'solution' => $case['forward_secrecy'] . ' ' . $case['post_compromise'],
            'evidence' => 'The solution connects deletion of old message keys to Forward Secrecy and a fresh Diffie Hellman exchange to recovery after compromise.',
            'meaning' => 'The answer does more than name the properties. It explains which ratchet behaviour creates each security property.',
            'result' => 'The report distinguishes protection of past messages from recovery of future messages after a compromise.'
        ],
        [
            'num' => '03',
            'title' => 'Verify the Product Files with GPG',
            'requirement' => 'Use the supplier public key and detached signature to determine which of the three product files is authentic.',
            'solution' => $case['q3_intro'],
            'evidence' => 'The public key is imported, each file is checked against the same detached signature, and only product_3.txt produces a valid signature.',
            'meaning' => 'The verification result proves which file matches the exact content that was signed with the corresponding private key.',
            'result' => $case['conclusion']
        ],
        [
            'num' => '04',
            'title' => 'Separate Signature Validity from Key Trust',
            'requirement' => 'Explain the difference between a mathematically valid digital signature and trust in the identity behind the public key.',
            'solution' => $case['validity_intro'],
            'evidence' => $case['remember'][0] . '. ' . $case['remember'][1] . '.',
            'meaning' => 'A valid signature can prove that a file matches a key, while key trust asks whether that key really belongs to the claimed supplier.',
            'result' => 'product_3.txt is cryptographically valid, but the public-key fingerprint should still be verified through a trusted channel.'
        ],
    ];
    ?>
<main class="blog-page case-study-learning-page">
    <section class="blog-article-head case-learning-hero">
        <div class="container blog-shell">
            <div class="breadcrumbs"><a href="/">Home</a><span>/</span><a href="/case-studies">Case Studies</a><span>/</span><span><?=e($case['nav'])?></span></div>
            <span class="blog-label"><?=e($case['eyebrow'])?></span>
            <h1><?=e($case['h1'])?></h1>
            <p class="case-learning-intro">Read the requirement first, then follow the completed solution. Each part below shows what the question expects, how the supplied answer addresses it, what evidence supports the answer, and what a student should understand from the result.</p>
            <div class="blog-topic-line"><?=e($case['topic_q2'])?> <span>•</span> <?=e($case['topic_q3'])?> <span>•</span> <?=e($case['tool_q3'])?></div>
        </div>
    </section>

    <section class="case-snapshot-section">
        <div class="container blog-shell">
            <div class="case-snapshot-grid">
                <div class="case-snapshot-card"><span>Question 2 topic</span><strong>Double Ratchet Algorithm</strong></div>
                <div class="case-snapshot-card"><span>Question 2 focus</span><strong>End to End Encryption</strong></div>
                <div class="case-snapshot-card"><span>Security properties</span><strong>Forward Secrecy + Post Compromise Security</strong></div>
                <div class="case-snapshot-card"><span>Question 3 tool</span><strong>GPG Command Line</strong></div>
                <div class="case-snapshot-card"><span>Authentic file</span><strong>product_3.txt</strong></div>
                <div class="case-snapshot-card"><span>Key lesson</span><strong>Validity is not the same as trust</strong></div>
            </div>
        </div>
    </section>

    <section class="blog-body-section">
        <div class="container blog-layout">
            <article class="blog-article">
                <section id="overview">
                    <div class="case-section-heading">
                        <span class="case-section-number">00</span>
                        <div><span class="mini-label">Start here</span><h2>Assignment Overview</h2></div>
                    </div>
                    <p>This solved assignment covers two different cybersecurity tasks. Question 2 explains the Double Ratchet Algorithm and its security properties. Question 3 uses GPG to determine which supplied product file is authentic and then explains why signature validity and public-key trust are separate decisions.</p>
                    <p class="source-meta"><strong><?=e($case['topic_q2'])?></strong> | <?=e($case['reference_q2'])?></p>
                </section>

                <section id="requirement-map">
                    <div class="case-section-heading">
                        <span class="case-section-number">01</span>
                        <div><span class="mini-label">Understand the questions</span><h2>Requirement → Solution Map</h2></div>
                    </div>
                    <div class="requirement-map">
                        <?php foreach($learningSteps as $step): ?>
                        <a class="requirement-map-row" href="#step-<?=e($step['num'])?>">
                            <span class="requirement-map-row__num"><?=e($step['num'])?></span>
                            <div><strong><?=e($step['title'])?></strong><small><?=e($step['requirement'])?></small></div>
                            <span class="requirement-map-row__arrow"><?=icon('arrow',17)?></span>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </section>

                <section id="step-by-step">
                    <div class="case-section-heading">
                        <span class="case-section-number">02</span>
                        <div><span class="mini-label">Requirement + answer together</span><h2>Step-by-Step Solved Assignment</h2></div>
                    </div>

                    <?php foreach($learningSteps as $step): ?>
                    <section class="learning-step" id="step-<?=e($step['num'])?>">
                        <div class="learning-step__head">
                            <span><?=e($step['num'])?></span>
                            <div><small>Assignment part</small><h3><?=e($step['title'])?></h3></div>
                        </div>
                        <div class="learning-step__grid">
                            <div class="learning-panel learning-panel--requirement"><span class="learning-panel__label">What the assignment asked</span><p><?=e($step['requirement'])?></p></div>
                            <div class="learning-panel learning-panel--solution"><span class="learning-panel__label">What the solution did</span><p><?=e($step['solution'])?></p></div>
                            <div class="learning-panel learning-panel--evidence"><span class="learning-panel__label">Evidence</span><p><?=e($step['evidence'])?></p></div>
                            <div class="learning-panel learning-panel--meaning"><span class="learning-panel__label">Why this matters</span><p><?=e($step['meaning'])?></p></div>
                        </div>
                        <div class="learning-step__result"><strong>Result</strong><span><?=e($step['result'])?></span></div>

                        <?php if($step['num']==='01'): ?>
                            <div class="case-detail-block">
                                <h4>1. Diffie Hellman (DH) Ratchet</h4><p><?=e($case['dh_ratchet'])?></p>
                                <h4>2. Symmetric Key Ratchet</h4><p><?=e($case['symmetric_ratchet'])?></p>
                                <h4>How messages flow (Alice → Bob)</h4><p><?=e($case['message_flow'])?></p>
                                <details class="case-command-box" open><summary>View the Double Ratchet diagram</summary><div><pre class="assignment-diagram"><code><?=e($case['diagram'])?></code></pre></div></details>
                            </div>
                        <?php elseif($step['num']==='02'): ?>
                            <div class="case-detail-block case-detail-grid">
                                <div><span class="learning-panel__label">Forward Secrecy</span><p><?=e($case['forward_secrecy'])?></p></div>
                                <div><span class="learning-panel__label">Post Compromise Security</span><p><?=e($case['post_compromise'])?></p></div>
                            </div>
                        <?php elseif($step['num']==='03'): ?>
                            <div class="case-detail-block">
                                <h4>Product Files</h4>
                                <details class="case-command-box"><summary>View the three supplied product files</summary><div>
                                    <div class="product-file-grid">
                                        <?php foreach($case['product_files'] as $fileName=>$fileContent): ?>
                                        <section class="product-file-card"><div class="product-file-card__head"><strong><?=e($fileName)?></strong></div><pre class="product-file-content"><code><?=e($fileContent)?></code></pre></section>
                                        <?php endforeach; ?>
                                    </div>
                                </div></details>

                                <h4>GPG Verification</h4>
                                <?php foreach($case['commands'] as $i=>$command): ?>
                                    <?php if($command[0]): ?><h4><?=e($command[0])?></h4><?php endif; ?>
                                    <?php if($i===0): ?><p><?=e($case['import_text'])?></p><?php elseif($i===1): ?><p><?=e($case['confirm_key_text'])?></p><?php endif; ?>
                                    <pre class="assignment-command"><code><?=e($command[1])?></code></pre>
                                    <?php if($command[2]): ?><p class="assignment-result <?=str_contains($command[2],'VALID') && !str_contains($command[2],'INVALID')?'assignment-result--valid':'assignment-result--invalid'?>"><?=e($command[2])?></p><?php endif; ?>
                                    <?php if($i===4): ?><pre class="assignment-output"><code><?=e($case['good_signature_output'])?></code></pre><?php endif; ?>
                                <?php endforeach; ?>

                                <h4>Verification Summary</h4>
                                <div class="article-table-wrap"><table class="article-table"><thead><tr><th>File</th><th>Product Name</th><th>Status</th></tr></thead><tbody><?php foreach($case['verification'] as $row): ?><tr><td><?=e($row[0])?></td><td><?=e($row[1])?></td><td><strong><?=e($row[2])?></strong></td></tr><?php endforeach; ?></tbody></table></div>
                                <ul><?php foreach($case['what_it_means'] as $item): ?><li><?=e($item)?></li><?php endforeach; ?></ul>
                            </div>
                        <?php elseif($step['num']==='04'): ?>
                            <div class="case-detail-block case-detail-grid">
                                <div><span class="learning-panel__label">Signature Validity</span><ul><?php foreach($case['signature_validity'] as $item): ?><li><?=e($item)?></li><?php endforeach; ?></ul></div>
                                <div><span class="learning-panel__label">Key Trust</span><ul><li><?=e($case['key_trust'][0])?></li><li><?=e($case['key_trust'][1])?></li><li><?=e($case['key_trust'][2])?><ul class="nested-list"><li><?=e($case['key_trust'][3])?></li><li><?=e($case['key_trust'][4])?></li><li><?=e($case['key_trust'][5])?></li></ul></li><li><?=e($case['key_trust'][6])?></li></ul></div>
                            </div>
                            <div class="case-key-finding"><span>Simple way to remember</span><strong><?=e($case['remember'][0])?></strong><p><?=e($case['remember'][1])?></p></div>
                            <p><?=e($case['final_note'])?></p>
                        <?php endif; ?>
                    </section>
                    <?php endforeach; ?>
                </section>

                <?php renderCaseStudyCTA('mid'); ?>

                <section id="takeaways">
                    <div class="case-section-heading">
                        <span class="case-section-number">03</span>
                        <div><span class="mini-label">Revision notes</span><h2>What Students Should Learn From This Assignment</h2></div>
                    </div>
                    <div class="student-takeaway-list">
                        <div><span>01</span><p>The Double Ratchet should be explained as two linked key-evolution processes, not only as a definition.</p></div>
                        <div><span>02</span><p>Forward Secrecy protects earlier messages, while Post Compromise Security explains how future messages can become secure again after fresh Diffie Hellman material is introduced.</p></div>
                        <div><span>03</span><p>Digital signatures should be verified against the exact file content. A small content change is enough to invalidate the signature.</p></div>
                        <div><span>04</span><p>A valid signature proves that the mathematics checks out for a key, but it does not by itself prove that the key belongs to the claimed organisation.</p></div>
                        <div><span>05</span><p>Good technical answers connect command output or diagrams to an explanation of what the evidence proves.</p></div>
                    </div>
                </section>

                <?php renderCaseStudyCTA('footer'); ?>
            </article>

            <aside class="blog-sidebar">
                <div class="blog-sidebar-card">
                    <span class="mini-label">On this page</span>
                    <a href="#overview">Assignment Overview</a>
                    <a href="#requirement-map">Requirement → Solution Map</a>
                    <a href="#step-by-step">Step-by-Step Solution</a>
                    <a href="#takeaways">Student Takeaways</a>
                </div>
                <div class="blog-sidebar-card">
                    <span class="mini-label">Jump to assignment part</span>
                    <?php foreach($learningSteps as $step): ?><a href="#step-<?=e($step['num'])?>"><?=e($step['num'])?> · <?=e($step['title'])?></a><?php endforeach; ?>
                </div>
                <div class="blog-sidebar-card">
                    <span class="mini-label">Related</span>
                    <a href="/cryptography-assignment-help">Cryptography Assignment Help</a>
                    <a href="/network-security-assignment-help">Network Security Assignment Help</a>
                    <a href="/case-studies">Solved Assignments</a>
                </div>
            </aside>
        </div>
    </section>
</main>
<?php renderFooter($subjects);
}
