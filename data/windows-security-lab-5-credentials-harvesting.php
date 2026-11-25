<?php
/** Source transcription: Lab 5 Credentials harvesting. Original answer text retained. */
return [
    'menu_featured' => false,
    'template' => 'windows_security_lab',
    'page_type' => 'case_study',
    'title' => 'Windows Security Lab 5: Credentials Harvesting',
    'meta_title' => 'Windows Security Lab 5: Credentials Harvesting Case Study | CyberAssignment',
    'h1' => 'Windows Security Lab 5: Credentials Harvesting',
    'nav' => 'Credentials Harvesting Lab',
    'description' => 'Completed Windows Security Lab 5 case study covering LSASS memory protection, Defender observations, process-memory analysis, LSA hardening, Windows Server Backup, and PowerShell backup policies.',
    'primary' => 'Windows Security credentials harvesting lab',
    'eyebrow' => 'Completed Windows Security Lab',
    'menu_meta' => 'Windows Security · LSA Protection · Backup & Recovery',
    'program' => 'CS',
    'course' => 'Windows Security',
    'lab' => 'Lab 5: Credentials harvesting',
    'topic_label' => 'Credentials harvesting',
    'main_tool' => 'Windows Security & Backup',
    'section_title' => 'Credentials Harvesting Lab Questions and Answers',
    'cta_after' => 12,
    'intro' => ['The Local Security Authority (LSA) process holds many credentials an attacker might be interested in harvesting. Not all methods work in all cases, and it depends on the countermeasures established in the target server, including the antivirus engine updated and running.'],
    'topics' => ['Windows Security', 'LSASS', 'Credential Protection', 'Windows Defender', 'VirtualBox', 'LSA Protection', 'Credential Guard', 'Windows Server Backup', 'Incremental Backup', 'PowerShell'],
    'questions' => [
        [
            'n' => 1,
            'source_n' => 1,
            'part' => 'Part A — Memory dumping',
            'question' => 'Open Windows Defender from the Start menu and turn on the real-time protection.',
            'answer' => ['I opened Windows Defender / Windows Security from the Start menu and navigated to Virus & threat protection. I checked the Real-time protection setting and turned it On. Real-time protection allows Windows Defender to continuously monitor files, applications, and system activity for potential security threats.'],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image1.webp']
        ],
        [
            'n' => 2,
            'source_n' => 2,
            'part' => 'Part A — Memory dumping',
            'question' => 'A very common tool to dump credentials from the memory is Mimikatz. Drag & drop the file mimikatz.exe and explain what happens (make sure first you can drag & drop any file, such as a document).',
            'answer' => ['First, I verified that VirtualBox drag-and-drop was working by transferring a normal document to the virtual machine. After confirming that drag-and-drop was working, I attempted to transfer mimikatz.exe.
Windows Defender detected the executable as a security threat because Mimikatz is commonly associated with credential-dumping activities. As a result, Windows Defender generated a warning and may block, quarantine, or remove the file. This shows that the antivirus protection can recognize potentially dangerous credential-harvesting tools.'],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image2.webp']
        ],
        [
            'n' => 3,
            'source_n' => 3,
            'part' => 'Part A — Memory dumping',
            'question' => 'An alternate method consists on using the tool procdump.exe. Open a cmd as administrator and move to the tool’s location. Execute the command below to get a memory dump of lsass into a file after your first name.',
            'answer' => ['The purpose of this exercise is to demonstrate that the LSASS (Local Security Authority Subsystem Service) process contains security-sensitive information and that privileged access to its memory is therefore protected by Windows.', 'The assignment uses ProcDump to demonstrate the creation of an LSASS memory dump. The resulting dump file is named using the student\'s first name.'],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image3.webp']
        ],
        [
            'n' => 4,
            'source_n' => 4,
            'part' => 'Part A — Memory dumping',
            'question' => 'You might have noticed some warnings coming from Windows Defender, but the dumping should have worked anyway. Show the file’s properties, including the creation time, either with dir in the cmd or using the File Explorer. Hurry up before the AV engine removes it!',
            'answer' => ['I checked the generated dump file immediately after the operation because Windows Defender may detect and remove a file containing a sensitive process-memory dump. I verified the file name, size, and creation time using File Explorer or the dir command.', 'The creation time provides evidence of when the dump file was generated.'],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image4.webp']
        ],
        [
            'n' => 5,
            'source_n' => 5,
            'part' => 'Part A — Memory dumping',
            'question' => 'Another way of dumping a process’ memory is the library comsvcs.dll. First, execute the PS cmdlet “Get-Process lsass” from a privileged terminal to get information about the process lsass.exe, specifically the PID.',
            'answer' => ['I opened a privileged PowerShell terminal and used Get-Process lsass to obtain information about the lsass.exe process. The important information for this question is the Process ID (PID).', 'The PID is assigned by Windows and can be different each time the system or process starts, so the value should be taken directly from the VM.'],
            'images' => []
        ],
        [
            'n' => 6,
            'source_n' => 6,
            'part' => 'Part A — Memory dumping',
            'question' => 'Next, execute the command below, but with the PID you found. The command will not return any output, but if working, you execute “dir yourname-lsass-2.dmp” and the created file should show up.',
            'answer' => ['This step demonstrates another method of creating a memory dump of a running process. After the operation, the important verification is whether the second dump file was successfully created.The assignment specifically asks to use dir afterward to verify that the second dump file exists.'],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image5.webp']
        ],
        [
            'n' => 7,
            'source_n' => 7,
            'part' => 'Part B — Getting credentials',
            'question' => 'Turn off Windows Defender. Then, drag & drop Mimikatz again if necessary. Open a command-line interface as administrator and move to Mimikatz’s location. Execute it and, in the prompt, type “privilege::debug”.',
            'answer' => ['This step demonstrates the effect of disabling a security control on a credential-analysis tool. After Windows Defender is disabled for the lab exercise, Mimikatz can be started from an administrator command-line environment and its privilege status can be checked.The purpose of privilege::debug in this context is to request the privileges required for Mimikatz to perform security-sensitive operations.'],
            'images' => []
        ],
        [
            'n' => 8,
            'source_n' => 8,
            'part' => 'Part B — Getting credentials',
            'question' => 'To read the credentials from the first dump file, execute the commands below in the Mimikatz prompt. Capture them.',
            'answer' => ['The first dump file is analyzed offline to demonstrate what sensitive information may be exposed when protected process memory is obtained by an attacker. The assignment asks for the output from the first dump to be captured.', 'The result may contain account information and credential-related material depending on the state of the system and the contents of the dump.'],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image6.webp']
        ],
        [
            'n' => 9,
            'source_n' => 9,
            'part' => 'Part B — Getting credentials',
            'question' => 'You will not likely find the original password from the hash. Try it anyway using any online cracking tool.',
            'answer' => ['A password hash is not the original password itself. A password-cracking process attempts to find a password that produces the same hash by testing possible values.
The original password may not be recovered because the result depends on the password\'s complexity, the hashing algorithm, and the available cracking resources. Therefore, a failed attempt to recover the original password is an expected possible result.'],
            'images' => []
        ],
        [
            'n' => 10,
            'source_n' => 10,
            'part' => 'Part B — Getting credentials',
            'question' => 'Try Mimikatz again with the second dump file. Compare the outcome.',
            'answer' => ['I analyzed the second dump and compared its result with the first dump. The two results may differ because the dumps were obtained at different times and can contain different information about the LSASS process.
The comparison demonstrates that the information available from a memory dump depends on the state of the process when the dump was created and on the security protections active at that time.'],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image7.webp']
        ],
        [
            'n' => 11,
            'source_n' => 11,
            'part' => 'Part C — System hardening',
            'question' => 'Research how to configure additional protection for the Local Security Authority (LSA) process to prevent code injection that could compromise credentials. How can Mimikatz bypass this protection?',
            'answer' => [
                'Additional protection can be configured for the Local Security Authority (LSA) process by enabling LSA protection, which makes LSASS run as a protected process and restricts unauthorized access to it.
Another important Windows security feature is Credential Guard, which uses virtualization-based security to help protect credential information from unauthorized access.
These protections make traditional credential-dumping techniques more difficult. A tool such as Mimikatz cannot simply assume that it can access protected LSASS memory. Bypassing such protections generally requires another weakness, sufficiently high privileges, or abuse of a trusted component. The exact method depends on the Windows version, security configuration, and'
            ],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image8.webp']
        ],
        [
            'n' => 12,
            'source_n' => 12,
            'part' => 'Part C — System hardening',
            'question' => 'What is the problem (for the attacker) with this approach?',
            'answer' => ['The main problem for an attacker is that LSA protection restricts unauthorized access to the LSASS process. This makes it much harder for an attacker to inject code into LSASS or directly obtain sensitive information from its memory.
As a result, traditional credential-dumping methods become less effective. The attacker may need additional privileges or another vulnerability to continue the attack.'],
            'images' => []
        ],
        [
            'n' => 13,
            'source_n' => 13,
            'part' => 'Part E — Preparing the environment',
            'question' => 'Add an additional SATA disk drive with 60 GB of dynamic space. Show the new drive settings in VirtualBox.',
            'answer' => ['I opened the MainDC virtual machine settings in VirtualBox and added a new virtual hard disk connected through the SATA controller. I configured the disk with a maximum size of 60 GB and selected dynamically allocated storage.A dynamically allocated disk grows as data is stored on it instead of immediately occupying the complete 60 GB on the host system.'],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image9.webp']
        ],
        [
            'n' => 14,
            'source_n' => 14,
            'part' => 'Part E — Preparing the environment',
            'question' => 'Once Windows started up, use the Disk Management console to format the new drive as NTFS. Assign the letter T: to the volume and name it yourfirstname-backups. Show all volumes in both disks.',
            'answer' => ['After Windows started, I opened Disk Management and identified the newly added disk. I created and formatted the new volume using the NTFS file system. I assigned the drive letter T: and named the volume James-backups.
I then verified that both the original disk and the newly added disk were visible and that the new backup volume was assigned to drive T:.'],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image10.webp']
        ],
        [
            'n' => 15,
            'source_n' => 15,
            'part' => 'Part E — Preparing the environment',
            'question' => 'What are your thoughts about using the new volume to store MainDC’s backups?',
            'answer' => ['Using a separate volume for backups is useful because it keeps backup data separate from the operating-system volume. It provides additional storage and makes the backup data easier to manage.', 'However, a separate volume on the same physical system does not provide complete protection against hardware failure, storage failure, ransomware, or loss of the entire virtual machine. For stronger protection, important backups should also be stored on a separate physical system or another secure backup location.'],
            'images' => []
        ],
        [
            'n' => 16,
            'source_n' => 16,
            'part' => 'Part F — Backup wizard',
            'question' => 'Open the Windows Server Backup dashboard. Start creating a full backup on T:. What message do you get regarding T:?',
            'answer' => ['I opened the Windows Server Backup dashboard and started configuring a full backup with T: selected as the backup destination.', 'Windows Server Backup displays a message regarding the selected destination volume. The exact message should be recorded from the VM because it depends on the current disk and backup configuration.'],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image11.webp']
        ],
        [
            'n' => 17,
            'source_n' => 17,
            'part' => 'Part F — Backup wizard',
            'question' => 'Note that this backup includes more than just files and folders. Leave the backup running in background. In the meantime, check the options to configure the backup’s performance on the right side. Change C: to incremental.',
            'answer' => ['While the backup was running, I checked the backup performance options on the right side of the Windows Server Backup interface. I changed the backup setting for the C: volume to incremental.', 'An incremental backup records changes made after an earlier backup rather than repeatedly creating an identical complete copy. This can reduce the amount of data that needs to be processed for subsequent backups.'],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image12.webp']
        ],
        [
            'n' => 18,
            'source_n' => 18,
            'part' => 'Part F — Backup wizard',
            'question' => 'Once the backup’s finished, double click on it and show proof of successful completeness.',
            'answer' => ['After the backup finished, I opened the completed backup entry and checked its status. The backup information provides confirmation that the backup operation completed successfully.
I verified the completion status and checked the details of the completed backup.'],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image13.webp']
        ],
        [
            'n' => 19,
            'source_n' => 19,
            'part' => 'Part F — Backup wizard',
            'question' => 'Create a folder named herzing in Documents and, in this new folder, a text file after your first name with some random content in it. Then, perform a full backup again with the same options. Prove it was really an incremental backup.',
            'answer' => ['I created a folder named herzing inside Documents. Inside the folder, I created a text file named James.txt and added test content to it.
I then performed another backup using the same configuration. The backup information was checked to determine that the subsequent backup stored the changes made after the previous backup rather than simply creating another identical full backup.'],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image14.webp']
        ],
        [
            'n' => 20,
            'source_n' => 20,
            'part' => 'Part F — Backup wizard',
            'question' => 'Remove the folder and file you created. Then, recover them from the incremental backup. Show the screenshots for the Select Backup Date and Select Items to Recover steps.',
            'answer' => ['I deleted the herzing folder and the text file that I created in Question 19. I then opened the Windows Server Backup recovery process and selected the backup containing the required files.
I selected the appropriate backup date and then selected the items that needed to be recovered. The recovery process was then used to restore the deleted folder and file..'],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image15.webp']
        ],
        [
            'n' => 21,
            'source_n' => 21,
            'part' => 'Part F — Backup wizard',
            'question' => 'Show the confirmation of completion. Would the recovery had worked if you had restored from the first full backup? Why or why not?',
            'answer' => ['After the recovery operation completed, I checked the confirmation message to verify that the selected files were successfully restored.', 'The recovery would not restore the newly created file from the first full backup if the file was created after that backup was completed. The original full backup only contains the data that existed at the time the backup was created. Therefore, the later backup containing the changes is needed to recover files that were created afterward.'],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image16.webp', '/assets/case-studies/windows-security-lab-5-credentials-harvesting/image17.webp']
        ],
        [
            'n' => 22,
            'source_n' => 22,
            'part' => 'Part G — Backups with PowerShell',
            'question' => 'Using Microsoft’s reference for Windows Server Backup cmdlets, perform a full system backup stored on T:, similar to the first one you performed with the dashboard.',
            'answer' => ['Windows Server Backup can also be managed through PowerShell. I used the Windows Server Backup PowerShell functionality to configure a full system backup with T: as the backup destination.', 'This demonstrates that Windows Server Backup can be administered through PowerShell in addition to the graphical Windows Server Backup dashboard.'],
            'images' => []
        ],
        [
            'n' => 23,
            'source_n' => 23,
            'part' => 'Part G — Backups with PowerShell',
            'question' => 'Now change the policy for the backup to be scheduled in 7 days.',
            'answer' => ['I changed the backup policy so that the backup schedule is configured for 7 days. This demonstrates that the backup policy can be modified to control when the next scheduled backup operation will occur.'],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image18.webp']
        ],
        [
            'n' => 24,
            'source_n' => 24,
            'part' => 'Part G — Backups with PowerShell',
            'question' => 'Get information about the policy you previously set.',
            'answer' => ['I retrieved information about the backup policy that was configured in Question 23. The policy information allows me to verify the current backup configuration and confirm the scheduled backup settings.
This provides evidence that the backup policy was successfully configured and can be queried after it has been created.'],
            'images' => ['/assets/case-studies/windows-security-lab-5-credentials-harvesting/image19.webp', '/assets/case-studies/windows-security-lab-5-credentials-harvesting/image20.webp', '/assets/case-studies/windows-security-lab-5-credentials-harvesting/image21.webp']
        ]
    ],
    'sidebar_items' => [
        [
            1,
            'Part A · Memory dumping'
        ],
        [
            7,
            'Part B · Getting credentials'
        ],
        [
            11,
            'Part C · System hardening'
        ],
        [
            13,
            'Part E · Preparing the environment'
        ],
        [
            16,
            'Part F · Backup wizard'
        ],
        [
            22,
            'Part G · Backups with PowerShell'
        ]
    ],
    'related_links' => [
        ['/information-security-assignment-help', 'Information Security Assignment Help'],
        ['/cyber-security-assignment-help', 'Cyber Security Assignment Help'],
        ['/case-studies/windows-security-lab-1-security-compliance-toolkit', 'Windows Security Lab 1'],
        ['/case-studies/windows-security-lab-3-access-controls', 'Windows Access Controls Lab'],
        ['/case-studies', 'All Case Studies']
    ]
];