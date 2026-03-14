<?php

return [
  'title' => 'TLÖN Project',
  'subtitle' => 'General Concepts',
  'adhoc-networks' => [
    'title' => 'Adhoc Networks',
    'description-1' => 'What is an Ad Hoc Network? it is a network of computers connected by wireless interfaces, with a dynamic level of resources, capable of providing services regardless of the dynamic and stochastic conditions of the nodes over time. Two properties characterize this type of systems; the first is self-organization, and the second, no less important than the previous one, to have a decentralized infrastructure. Which is why such systems are able to generate pseudosocial behaviors from the moment of their shaping to the end of their operation. Formally, Ad Hoc networks are a random graph (Newman, 2003) with a set of vertices, commonly called nodes, in this case mobile, joined by a set of links called edges, which change dynamically depending on the time and conditions of the environment, for example, user requests.',
    'description-2' => 'A definition closer to the scope of this project is as follows, a mobile cloud is a flexible, dynamic and stochastic computational platform that manages distributed computational resources that are linked wirelessly; these in turn, can be changed, moved, augmented and in general, combined in novel ways. (Fitzek, Katz, 2014).',
    'figure' => 'Figure 1.',
    'figure-description' => 'Ad hoc network topology.'
  ],
  'multiagent-system' => [
    'title' => 'Multi-agent System',
    'description-1' => 'Multi-agent systems are part of distributed artificial intelligence and have gained considerable acceptance over the past few years due to their ability to solve complex problems. These systems can operate in a decentralized manner and allow to include properties such as robustness and adaptation, which are of great importance in non-stationary environments. Due to the lack of centralized control, agents can compete, cooperate or simply coexist by generating the need to build mechanisms to solve problems through collective actions. These characteristics make them a promising model for operating on systems such as ad hoc networks.',
    'description-2' => 'Figure 3 shows the multi-agent system operation scheme. In this case, the organization and purpose of the system must emerge as a result of local interactions between its components; the objective should not be explicitly programmed or controlled. Components must interact autonomously, adapting their behaviors to the possibilities offered by the operation context.',
    'figure' => 'Figure 3.',
    'figure-description' => 'Multi-agent system operation scheme.'
  ],
  'virtualization' => [
    'title' => 'Virtualization',
    'description-1' => 'Virtualization is the creation of a set of logical architectures using a given set of physical entities, but in a way that is transparent to the user. (Wang, Prashant , Tipper, 2013). Resource virtualization in this context seeks to create a highly available server over the Ad hoc network infrastructure, taking into account dynamic link conditions. Mobility features and convergence needs have led to the parallel development of various infrastructure-as-a-service (SaaS) or even networking-as-a-service (NaaS) technologies, all under virtualization systems, or better in schematics where software or a higher logical layer gain strength for deployment as are Software Defined Networks (SDN).',
    'description-2' => 'It is important to note that these wireless virtualization projects are not under the conditions of Ad Hoc networks, which are in some ways opposed to the minimum characteristics required by wireless virtualization: coexistence, flexibility, isolation, scalability, convergence, some are the same as mobility and the use of limited resources such as the spectrum.',
    'description-3' => 'The mobility feature and convergence needs have led to the parallel development of various infrastructure-as-a-service (SaaI) or even networking-as-a-service (NaaS) technologies, all under virtualization systems, in schematics where software or a higher logical layer gain strength for deployment as are Software Defined Networks (SDN).',
    'figure' => 'Figure 2.',
    'figure-description' => 'Wireless network virtualization scheme.'
  ],
  'language' => [
    'title' => 'Language',
    'description-1' => 'A language is a set of elements that allows us to express ourselves and communicate with other entities, whether people, animals, computers, etc. This same concept is translated into computer systems through a programming language, which consists of three elements: lexical, syntactic and semantic. Programming languages are also a tool used to solve a particular problem, as shown in (Aho, 2007) and (Terfloth, 2008). Implementing the programming language requires a compiler.',
    'description-2' => 'Figure 4 contains the description of the composition of a compiler for a programming language. When performing stage layering, the basic functions that a programming language must perform are defined. Starting with the input that are the instructions of the user or source program, then moves to a lexical parser, which is responsible of splitting the statements into tokens that will be the input to the parser. The purpose of the parser is to review the syntax of the instructions in the source program where it is checked for a well-defined structure. The third layer is the semantic analyzer, this module analyzes whether the instructions have meaning so that the functions or operations indicated in the source program can proceed. The last three modules are responsible for the process of generating and optimizing code so that the machine executes the given instructions',
    'description-3' => 'These principles are maintained in specific domain languages, but they maintain proportions depending on the application for which they are designed.',
    'figure' => 'Figure 4.',
    'figure-description' => 'Composition of a compiler for a programming language.'
  ],
  'network-coding' => [
    'title' => 'Network Coding',
    'description-1' => 'Network Coding is a transmission paradigm proposed by Ahlswede et al. in the year 2000.It is recognized as an important advance on the information transmission model proposed by Claude Shannon in 1948. Since the emergence of the seminal paper that proposed Network Coding, many researchers have made considerable effort to study the theory and applications of this transmission model.',
    'description-2' => 'The most important difference between Network Coding and traditional transmission paradigms is that nodes inside the network can apply coding procedures on packets, an activity that goes beyond the simple store-and-forward.',
    'figure' => 'Figure 5.',
    'figure-description' => 'Basic operation of Network Coding on a network device.',
    'description-3' => 'The benefits of Network Coding include improved network performance (throughput), reduced power consumption, reduced bandwidth cost, and more. Because of these benefits, Network Coding has applications in various types of networks: wireless ad hoc networks, content distribution networks, distributed storage networks, secure distribution of cryptographic keys, tomography of the data network, Etc.',
    'description-4' => 'Network Coding also introduces new challenges and opportunities in security and privacy. One problem is that data transmission increases its vulnerability to pollution attacks: a single malicious package can contaminate a group of good packets during the intermediate encoding process and ruin data integrity. On the other hand, we can take advantage of Network Coding as intrinsic secrecy properties as a security mechanism to provide confidentiality services.'
  ]
];