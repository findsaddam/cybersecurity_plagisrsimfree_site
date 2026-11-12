<?php
return [
    'windows-server-2022-active-directory-domain-lab' => [
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
        'course' => 'CSCE 4550 — Operating Systems Security',
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
];
