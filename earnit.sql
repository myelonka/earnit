-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2017 at 12:07 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `earnit`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `idApplicant` int(11) NOT NULL,
  `fNameApplicant` varchar(50) NOT NULL,
  `lNameAppicant` varchar(50) NOT NULL,
  `letter` varchar(5000) NOT NULL,
  `cv` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postId` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `promoSentence` text NOT NULL,
  `isFeatured` tinyint(1) NOT NULL DEFAULT '0',
  `employerMail` varchar(22) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deadline` date NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postId`, `author`, `title`, `description`, `promoSentence`, `isFeatured`, `employerMail`, `timestamp`, `deadline`, `category`) VALUES
(3, 'Icnarc', 'Head of Data and Business Technology', 'Do you get excited by the possibilities technology can bring? Can you inspire others to look beyond the usual? Data and technology is at the very heart of all we do, and we are proud of our ability to change and adapt in a fast-paced technological world.\r\n\r\nWe are looking for an exceptional senior executive to lead and manage our Data and Technology team as we embark on our most ambitious programme of development.\r\n\r\nYou will be responsible for all aspects of the clinical audit and research information systems that power our innovative work. This will include our hardware, software, data processing, data management and reporting. You will need to work closely with UK wide stakeholders, external suppliers and contractors.\r\n\r\nAbout you\r\n\r\nYou will have significant experience of: leading an IT function; application and infrastructure services; working with external system providers\r\nYou will have a clear understanding and practical knowledge of IT applications and technical disciplines, including process redesign, systems development and service/project delivery\r\nYou will be experienced in inspiring, motivating and developing high-performance teams\r\nYou will have excellent interpersonal and oral communication skills with the ability to present, negotiate, consult, influence and build credibility with internal and external stakeholders at all levels\r\nYou will have embraced and driven change in your previous roles\r\nOur benefits\r\nWe understand the need for staff to balance personal commitments and family life with work.  We are proud of our range of policies to support staff which include: flexitime; enhanced maternity and paternity provisions; and working at home. We also offer:\r\n\r\n25 days holiday, plus Bank Holidays, per year and the opportunity to buy and sell leave\r\nFlexible working which is fully embedded in our culture\r\nInterest-free season ticket loans\r\nSupport with further academic/professional development\r\nEnhanced pension contributions after your first year of employment.\r\nDo you get excited by the possibilities technology can bring? Can you inspire others to look beyond the usual?', 'Do you get excited by the possibilities technology can bring? Can you inspire others to look beyond the usual?', 0, 'icnarc@info.org', '2017-11-05 16:37:21', '2017-12-25', 'seoSpecialist'),
(4, 'PWC', 'Cyber Security', 'Cyber Security - Managers\r\n\r\nBackground\r\n\r\nCyber security is one of the defining topics of our age, and cyber risk represents one of the most significant strategic risks to PwC’s private sector clients. We believe helping our clients gain confidence in their digital future is essential to their growth, and as a result our cyber security practice is one of the key growth priorities of our firm.\r\n\r\nWe are one of the largest cyber security specialist consulting practices in the UK, we work closely with the leading experts, researchers, tech vendors and government agencies in the field, and we serve some of the largest and most complex clients in the world.\r\n\r\nThis is an exciting time to be working cyber security, and nowhere more so than at PwC.\r\n\r\nOur Practice\r\n\r\nOur cyber security practice operates nationally, and serves clients holistically with both strategy, risk and governance advice, and with deep technical implementation and assurance expertise. We have over 200 practitioners who range from business risk advisors who work with CEOs, CFOs and boards, to deep technical SMEs who help clients implement controls to secure their businesses from attack, and support them to respond when an attack occurs.\r\n\r\nOur career models recognise both, and give our people the opportunity to be challenged and to develop whatever their chosen cyber specialism.\r\n\r\nOur team helps clients to understand their cyber risks and define and execute a strategy which enables the business to deliver its objectives within their desired risk envelope. We support client leadership teams to define their risk appetite and a proportionate target state of cyber capability and maturity to deliver it; we define operating and governance models to make cyber security a sustainable capability which responds to evolving business priorities. We also help clients define and assure complex control solutions to help them manage their risks.\r\n\r\nThe Role\r\n\r\nThe Cyber Security Manager provides expert strategy, risk and technical advice, guidance and support on cyber security, both in business-as-usual and for live and planned projects within our clients’ business.\r\n\r\nYou will have a broad range of cyber and information security skills, knowledge and experience, perhaps underpinned by a deeper SME in one of our key advisory practice areas (see www.pwc.co.uk/cyber). You may have worked across multiple industries, or have developed a deep specialism in a particular sector. Whichever of these describes you, you will be developing a strong track record of credibility as a trusted advisor to senior business stakeholders on cyber secuity, and you must be experienced and comfortable working with stakeholders up CxO level in FTSE350-scale companies.\r\n\r\nLocations: we have major cyber practice hubs in six major cities across the UK, but these roles are based in London\r\n\r\nIn return we offer:\r\n\r\nVariety - An impressive list of clients with different needs and issues at both a technical and strategic level.\r\nOpportunity - To develop your technical and business skills and enhance your business advisory, presentational and inter-personal skills.\r\nSupport - We work as a team and support each other on a day-to-day basis. We also actively encourage an ongoing exchange of knowledge across the many specialists operating within PwC.\r\nTraining - PwC is recognised for the quality of its training programmes that cover both technical and \'soft\' (e.g. report writing) skills.\r\n Challenge - We work in an atmosphere which encourages you to be proactive and imaginative with the emphasis always on serving clients\' needs.\r\nResponsibilities:\r\n\r\nClient service:\r\n\r\nManaging and delivering cyber security and cyber risk assignments, including producing documentation and reports, and quality assuring the work produced by junior team members.\r\nWorking as a subject matter expert in your particular field to support a team, and/or managing a larger team in delivering engagements at scale.\r\nMaintaining cyber security and risk knowledge and certifications, sharing this knowledge with junior team members.\r\nMaintaining awareness of key business and industry trends, and understanding how they impact responses to cyber risk.\r\nChampioning the delivery of the highest quality services to PwC’s clients, and actively managing and mentoring junior team members to do the same, while managing the risks to the firm.\r\nBusiness and practice development:\r\n\r\nBuilding client relationships and establishing credibility by demonstrating knowledge of various aspects of cyber security, and identify opportunities where PwC can assist.\r\nSupporting senior members of the team in developing client proposals and solution offerings.\r\nContributing to the financial and operational management of the practice.\r\nDriving the development of toolkits, methodologies and accelerators.\r\nProviding thought leadership and direction for the cyber security practice.\r\nHelping recruit, retain and develop other cyber security team members.\r\nQualifications & Experience:\r\n\r\nWe are looking for exceptional Managers who can provide our clients with trusted advice, rooted in a pragmatic understanding of their business situation and objectives, to help them navigate complex, risk-driven Cyber decisions.\r\n\r\nOur Managers help clients effect substantial and complex business change, and experience of assuring or enabling change at scale is essential.\r\n\r\nWe welcome applications from candidates who have spent some time working “in-house” in a relevant organisation, but it is likely that you will have gained at least some of your experience working in a business-oriented consulting environment where you have faced off to clients’ senior business leaders, and relationship-based business development experience is essential.\r\n\r\nWe are particularly interested to meet candidates who have worked in or supported clients in the following industries:\r\n\r\nRetail\r\nConsumer Goods and Services\r\nEnergy, Oil/Gas or Mining\r\nUtilities and national capital infrastructure\r\nDigital, media and technology\r\nPharma, life sciences and medical devices\r\nIn addition:\r\n\r\nCyber Security related qualification(s) such as CISSP, CISM, ISO Lead Auditor etc\r\nExperience in risk & regulatory frameworks and standards such as NIST 800, ISO 27001, ISF SOGP, PCI-DSS etc\r\nExcellent communication skills – both oral (for interviews/meetings, presentations) and written (for designing and writing engaging reports which communicate findings succinctly and clearly convey the message in a way which is appropriate for the audience, and rooted in the client’s needs).\r\nExperience of business development or sales, including leading bid teams, and experience of writing winning proposals and RFP responses.\r\n', 'This is an exciting time to be working cyber security, and nowhere more so than at PwC.', 1, 'pwc@info.de', '2017-11-05 13:10:26', '2018-01-15', 'uxDesigner'),
(5, 'Dixons IT', 'Senior Software Engineer', 'We are a fast growing technology business that develop deal comparison SaaS for our own branded retail business Simplifydigital and numerous other blue-chip clients across Europe, including: BSkyB, TalkTalk, Comparethemarket and Webhelp. The business was founded in 2007 and currently focuses on TV, broadband, home phone and energy price comparison.\r\n\r\nWe were named as one of Europe\'s fastest growing technology businesses in the 2013 GP Bullhound Media Momentum Awards.\r\n\r\nWe have been awarded the Sunday Times Tech Track 100 and the Deloitte Technology Fast 50 awards for the past three years in a row (2015, 2014 & 2013). In 2016 we were acquired by Dixons Carphone.\r\n\r\nAs a Software Engineer you will report to a Technical Lead, working in a Scrum team and closely with stakeholders and product managers on a number of high profile projects.\r\n\r\nA bit about what you may be doing:\r\n\r\nWorking within an Agile environment on a number of high profile projects\r\nLiaising with the technology team and wider business to effectively complete these projects\r\nContributing to the Technology strategy and architecture by suggesting new technologies and solutions. \r\nKEY SKILLS\r\n\r\nDegree in a technical discipline like Computer Science, Mathematics, Physics, etc.\r\nExperience in some of the following technologies:\r\nBackend: C#, Node, MVC.NET, Elasticsearch, MongoDB, SQL Server, RabbitMQ, Jenkins CI, Gitlab\r\nFrontend: KnockoutJS web components, AngularJS, Gulp, Bower, PostalJS, karma, jasmine, LESS\r\nExcellent communication skills and ability to work effectively in a team environment.\r\nSOLID principles and design patterns.\r\nDESIRABLE SKILLS\r\n\r\nExperience of working in an Agile environment (SCRUM/XP/lean)\r\nExperience in engineering best practices such as:\r\nTest-first design\r\nPair programming + code reviews\r\nContinuous integration', 'We were named as one of Europe\'s fastest growing technology businesses in the 2013 GP Bullhound Media Momentum Awards.', 0, 'DIt@dixons.com', '2017-11-05 13:12:57', '2018-02-01', 'seoSpecialist'),
(6, 'QWC', 'Application Developer', 'The Senior Application Developer will be responsible for leading and contributing in development activities supporting DevOps practice at QVC. As part of the software development team supporting DevOps, the ideal candidate will provide thought leadership and also drive standards and designs. As a Senior Application Developer, the ideal candidate will also help define short and long term strategic road maps and implementation road maps supporting DevOps practices. The candidate will also develop new APIs, integrations and applications supporting the DevOps vision. The Senior Application Developer will develop and foster close relations with key stake holders within IT organization to understand their requirements and to help shape implementation road map of DevOps.\r\n\r\nResponsibilities\r\n\r\nProvides thought leadership to rest of the development team\r\nProvide technical mentorship to junior staff member\r\nHelp Scrum Master in determining sequence of development execution\r\nHelp team members with orchestration of development activities\r\nOwn and delivery design artifacts for each sprints\r\nWork independently to develop tools and applications, including APIs, Web portals, databases, and virtual servers that will help deliver high quality software quickly.\r\nApply knowledge of the latest trends in the DevOps industry and engage with other team members to consult and help to implement DevOps practices.  \r\nAct as a change agent and champion for DevOps practices.\r\nInterface with various teams within IT including Application Development, QA, Infrastructure and production readiness.\r\nEstimates own and in some case feature level work effort for input to project planning.\r\nEscalates delays, issues, risks and highlights to project managers and/or project leads.\r\nRequirements\r\n\r\nTypical candidates will possess 4+ years of relevant experience and a BS in Computer Science or related fields, or equivalent experience.\r\n4+  years of experience in general system delivery\r\n3+ years within DevOps practice\r\nExperience with Agile methodology is a must\r\nExperience in Continuous Integration and Continuous Deployment (using toolsets such as Jenkins, Bamboo, Octopus, Maven, Artifactory) is a must\r\nExperience in Source code/ rep management including SVN, GIT, Artifactory\r\nExperience in collaboration platform including Jira & confluence\r\nExperience building RESTful APIs using Java / Spring (& spring boot)\r\nExperience with deploying to containers\r\nExperience with Spring Cloud / Spring Configuration/ Spring Vault is desirable\r\nExperience in config / provisioning including puppet or chef is desirable\r\nExperience with Angular is a plus\r\nExperience in scripting language such as PowerShell, Bash, PHP, Python is desirable\r\nDemonstrated ability to adapt to new technologies and learn quickly\r\nStrong verbal and written communication skill\r\n', 'Get ready for a kick off of your growing career.', 0, 'qwc@qwc.lt', '2017-11-05 13:17:26', '2018-02-14', 'interactionDesigner'),
(7, 'The British Museum', 'IT Architect', 'We are recruiting for an ICT Officer to provide assistance for system maintenance and the monitoring of data flow for the Portable Antiquities Scheme’s PASt Explorers project, generously funded by the Heritage Lottery Fund.\r\n\r\nThe post-holder will check data from public records entered onto the database, maintain online communities, develop web resources and develop the national/county synthesis of research online. You will also provide database training for volunteers and self-recorders, whilst thinking of innovative ways to keep web design and content up-to-date.\r\n\r\nThe ideal candidate will be educated to degree level, or equivalent, with demonstrable experience of data and database administration. With strong knowledge of web development with PHP, SQL & HTML, you will have experience of source code version control, end-user support and troubleshooting.\r\n\r\nWe are interested in hearing from candidates who have excellent communication and interpersonal skills to liaise effectively with a variety of stakeholders. With the ability to take initiative, you will identify ways to continually improve processes whilst being sensitive to the needs of local communities.', 'You will have amazing journey with us!', 1, 'britishmuseum@info.com', '2017-11-05 13:20:24', '2017-12-08', 'webDesigner'),
(8, 'Aspire', 'Graphic Designer', 'We are currently recruiting a Digital Analyst for joining media company. This company is a young team of driven individuals who are not afraid of hard work.\r\n\r\nThis is a great opportunity for a candidate with a passion about data and analysis who wants a career opportunity within the digital and media industry.\r\n\r\nAs Digital Analyst, your responsibilities will be:\r\n\r\nDelivering data processing, customer analytics and database development projects.\r\nPeriodic client analysis\r\nMaintenance and performance optimisation in Paid Social and Paid Search campaigns.\r\nAdvice, recommendations and reports based on the analysed data.\r\nMonitor SEO Traffic and ranking performance.\r\nThe ideal candidate will have the following:\r\n\r\nTo be educated to degree level in an analytical subject: Maths, Economics, Physics, Computer Science or a similar related subject.\r\nAdvanced Excel is a must.\r\nAdvanced Google Analytics is a must.\r\nGenuine interest or experience in digital and media industry is required.\r\nMultitasking individual with strong analytical, communication and presentation skills.\r\nApply for this role today by sending me your CV via this website.\r\n\r\nPlease note all applications will be made in confidence.', 'Digital Analyst role for an amazing media company!', 0, 'aspire@inspire.com', '2017-11-05 13:23:41', '2017-12-29', 'webDesigner'),
(9, 'Pearson', 'Technical Architect', 'The Role\r\n\r\nWe have an exciting opportunity for a Technical Architect to join the technology team responsible for the Active Learn platforms for schools. With around 3 million users across the UK and internationally, these key platforms deliver the content for Pearson\'s major products such as Bug Club, Abacus and Edexcel GCSE materials.\r\n\r\nKey Responsibilities\r\n\r\nTo lead definition and implementation of technical and architectural standards and strategy for a range of customer-facing teaching and learning services.\r\n\r\nWorking with the Platform Managers and Technical Leads, you will help the platform development teams to deliver new features and architectural improvements, ensuring that our learning platforms deliver performance and security, through adoption of technology standards and strategy, so that our code is written in an efficient, clear and maintainable manner, including documentation.\r\n\r\nWorking with Enterprise Architecture and Global Learning Services teams, you will ensure alignment with global technology strategy, and identify opportunities to improve collaboration across teams, and to reuse technology capabilities.\r\n\r\nWorking directly with business stakeholders, you will support them in designing new product solutions, content creation standards and provide them with technical guidance and support.\r\n\r\nYou will be working within a matrix organisation to lead teams - both in house and outsourced, on- and off-shore - and will play a lead role in establishing good team dynamics, high productivity and continuous improvement.\r\n\r\nQualifications\r\n\r\nEssential Experience\r\n\r\nExperience working as a Technical Architect or Software Architect. We will also consider people who have experience as a Technical lead and are ready to step up into an Architecture role.\r\nExperience of working on complex consumer-orientated digital projects or programmes.\r\nSolid technical understanding of web technologies and solution design;\r\nStrong record of delivery using iterative software development practices.\r\nExperience in working with third-party suppliers across multiple sites;\r\nDesirable Experience\r\n\r\nExperience of working in educational, publishing or media organisations;\r\nUnderstanding and practical experience of implementing web sites with good User Experience;\r\nImproving and developing platforms for performance and security;\r\nClear understanding of Agile development tools and methodologies;\r\nExperience of leading distributed development teams and matrix organisations\r\nAny relevant qualifications / degree would be highly desirable.\r\nAt Pearson, we’re committed to a world that’s always learning and to our talented team who makes it all possible. From bringing lectures vividly to life to turning textbooks into laptop lessons, we are always re-examining the way people learn best, whether it’s one child in our own backyard or an education community across the globe. We are bold thinkers and standout innovators who motivate each other to explore new frontiers in an environment that supports and inspires us to always be better. By pushing the boundaries of technology - and each other - to surpass these boundaries, we create seeds of learning that become the catalyst for the world’s innovations, personal and global, large and small', 'We have an exciting opportunity for a Technical Architect to join the technology team!', 1, 'sotime@geg.lv', '2017-11-05 13:29:18', '2018-01-01', 'frontEnd'),
(10, 'British Heart Foundation', 'Developer', 'About the role \r\n\r\nWe are looking for a new Developer to join our IT Team. As an excellent problem solver you will champion excellence in the development and support of technical solutions.\r\n\r\nYou\'ll configure, implement, support and maintain technical solutions, performing development/configuration activities for large complex BHF programmes in both Waterfall and Agile environments. You will ensure that development/configuration activities are delivered on time and to budget.\r\n\r\nResponsible for detailed system design and the creation of project documentation to expected quality; you will be an advocate and adopt new technology trends whilst also mentoring junior team members.\r\n\r\nAbout you\r\n\r\nTo be successful in this role you will have excellent communication skills and the ability to build strong working relationships with key stakeholders across the organisation at all levels.\r\n\r\nWith a degree in Computer Science / Software Engineering or equivalent you will have a solid grasp of underlying software engineering principles and techniques. You\'ll have demonstrable commercial experience and all aspects of the software development lifecycle.\r\n\r\nYou\'ll be experienced using and applying the latest technical architectures with Microsoft technologies and be experienced working in a team environment contributing to architecture, technical design and technical documentation of systems. You\'ll also have experience of web Development and Design (HTML, CSS, JavaScript) as well as knowledge of development languages which cover key Microsoft programmes.\r\n\r\nThis is an opportunity to make a lasting change to the work that we do. We are looking for someone with a can do attitude, flexible to work on multiple projects and ensure key deadlines are met. Strong applications should demonstrate your understanding of complex business requirements, how you continuously seek to improve services to meet customer needs and your technical experience for the post.\r\n\r\nHow to apply \r\n\r\nTo apply for this role please click through to our website for further details. Our process involves submitting your CV and supporting statement which should outline your interest and explain how you meet the role\'s criteria.\r\n\r\nBritish Heart Foundation recognises and respects the value and diversity of all.', 'For over 50 years our research has saved lives. But heart and circulatory disease still kills one in four people in the UK. That\'s why we need you.', 0, 'sotddime@geg.lv', '2017-11-05 13:31:08', '2018-11-15', 'seoSpecialist'),
(11, 'Save The Children', 'Database Manager', 'Parkinson’s UK is the Parkinson’s support and research charity. Among our greatest strengths are our people, the enthusiasm of our local groups and supporters and the commitment of our staff. We’re leading the work to find a cure and improve life for everyone affected by Parkinson\'s and you could be part of helping us achieve this.\r\n\r\nParkinson\'s UK is looking for an experienced digital product management lead to develop our product management function. You\'ll be heading up a multidisciplinary team, creating, supporting and continuously improving products of significant scale and complexity - for example our personalisation products, AI-driven customer service, our case management system, our online shop, and our website.\r\n\r\nYou will take products through discovery, alpha, beta and live phases of development with the goal of making our services simpler, easier and faster to use. You will support other product managers to devise and iterate product roadmaps and backlogs, be a champion for user needs, document product knowledge, and communicate plans and progress through various channels including stakeholder meetings and demos. You\'re responsible for helping the charity adopt good product management culture, coaching and mentoring Product Managers and Product Owners across the business. This includes bringing in and teaching new product management techniques within the charity. You will also be a key contact for our main agency partners.\r\n\r\nThe ideal candidate will have expert knowledge of product management as a discipline. You will have a proven track record at delivering and continuously developing big digital products - not just websites - in an agile way and at pace.\r\n\r\nWe are looking for candidates who are approachable, engaging and take a pragmatic approach to managing programmes of work. You will be an excellent communicator and able to explain what product management means to a wide range of people with varying knowledge in an engaging way.', 'You will take products through all phases of development with the goal of making our services simpler, easier and faster to use.', 1, 'kvpss@fgv.ru', '2017-11-05 13:37:04', '2018-03-03', 'backEnd'),
(12, 'ABC', 'UX Researcher needed', 'Nunc dolor sit amet, sodales in, accumsan fringilla tempus enim. Praesent magna et magnis dis parturient montes, nascetur ridiculus mus. Etiam varius, rutrum pede dictum sit amet quam. Vestibulum a mi. Curabitur non enim. Nunc viverra, est a nulla. Curabitur interdum. Integer mi id fringilla sem urna mauris, rutrum viverra, enim sodales eros. Mauris imperdiet, lorem pretium magna. Integer adipiscing. Mauris convallis ac, auctor neque. Pellentesque aliquam dolor. Pellentesque dapibus risus. Morbi sollicitudin. Vestibulum non eros. Mauris nunc ut nibh. Fusce tempor varius, leo. Cras justo nibh, ut ante. Maecenas arcu massa, feugiat venenatis, elit metus, quis erat. Integer adipiscing.', '', 0, 'job@abc.com', '0000-00-00 00:00:00', '0000-00-00', 'uxDesigner');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `linkFacebook` varchar(255) NOT NULL,
  `linkLinkedIn` varchar(255) NOT NULL,
  `linkGitHub` varchar(255) NOT NULL,
  `headline` text NOT NULL,
  `phoneNo` varchar(12) NOT NULL,
  `location` varchar(255) NOT NULL,
  `memberSince` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `fName`, `lName`, `avatar`, `linkFacebook`, `linkLinkedIn`, `linkGitHub`, `headline`, `phoneNo`, `location`, `memberSince`) VALUES
(1, 'test@test.com', 'test', 'test1', 'lastName', 'pexels-photo-668435.jpeg', 'fb', 'li', 'gh', 'headline', '000000001', 'location', '2017-11-11 22:47:49'),
(2, 'mateusz.mielowski@gmail.com', '123', 'Mateusz', 'Mielowski', NULL, 'boski.mieloski', 'mateusz-mielowski-2a0235101', 'myelonka', 'Solutions to improve your visual communication and make shit look nice.', '0790269222', 'JÃ¶nkÃ¶ping, Sweden', '2017-11-11 18:42:22'),
(3, 'j.zivny@gmail.com', '123', 'Josef', 'Å½ivnÃ½', 'z9564884V.jpg', 'joseeeef', 'j.zivny', 'josefinko', 'Bez prÃ¡ce nejsou kolÃ¡Äe.', '762758818', 'Prague, Czechia', '2017-11-11 20:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `usertopost`
--

CREATE TABLE `usertopost` (
  `postId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertopost`
--

INSERT INTO `usertopost` (`postId`, `userId`) VALUES
(4, 8),
(5, 2),
(8, 1),
(9, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`idApplicant`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postId`);
ALTER TABLE `posts` ADD FULLTEXT KEY `description` (`description`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertopost`
--
ALTER TABLE `usertopost`
  ADD UNIQUE KEY `postId` (`postId`,`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `idApplicant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
