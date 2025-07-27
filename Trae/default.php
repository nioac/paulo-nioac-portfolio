<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paulo Nioac | Especialista em Dados e Design Visual</title>
    <meta name="description" content="Portfólio profissional de Paulo Nioac, especialista em análise de dados e design visual, com experiência em finanças, energia e design.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #0f2c54;
            --secondary-color: #1f4d8a;
            --accent-color: #3878cc;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --gray-color: #495057;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark-color);
            background-color: #f8f9fa;
            line-height: 1.6;
        }
        
        header {
            background-color: var(--primary-color);
            background-image: 
                radial-gradient(circle at 20% 35%, rgba(44, 83, 131, 0.8) 0%, transparent 50%),
                radial-gradient(circle at 75% 65%, rgba(31, 77, 138, 0.8) 0%, transparent 50%);
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, rgba(15, 44, 84, 0.95) 0%, rgba(31, 77, 138, 0.95) 100%);
        }
        
        .btn-primary {
            background-color: var(--accent-color);
            color: white;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
        }
        
        .btn-outline {
            border: 2px solid var(--accent-color);
            color: var(--accent-color);
            transition: all 0.3s ease;
        }
        
        .btn-outline:hover {
            background-color: var(--accent-color);
            color: white;
        }
        
        .section-title {
            color: var(--primary-color);
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background-color: var(--accent-color);
        }
        
        .card {
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(15, 44, 84, 0.15);
            transition: all 0.3s ease;
            background-color: white;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(15, 44, 84, 0.2);
        }
        
        .skill-badge {
            background-color: #e9ecef;
            color: var(--primary-color);
            padding: 0.35rem 0.75rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 500;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
            transition: all 0.2s ease;
        }
        
        .skill-badge:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .navbar {
            background-color: rgba(15, 44, 84, 0.95);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
        
        .testimonial-card {
            position: relative;
        }
        
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: -15px;
            left: 20px;
            font-size: 80px;
            color: rgba(56, 120, 204, 0.2);
            font-family: Georgia, serif;
        }
        
        .data-chart {
            width: 100%;
            height: 150px;
            background-color: #f1f3f5;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
        }
        
        .data-bar {
            position: absolute;
            bottom: 0;
            width: 8%;
            background-color: var(--accent-color);
            transition: height 1s ease;
        }
        
        .article-card {
            border-left: 4px solid var(--accent-color);
        }
        
        .project-tag {
            background-color: rgba(56, 120, 204, 0.15);
            color: var(--secondary-color);
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 500;
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            background-color: var(--light-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 1.5rem;
            margin-right: 1rem;
            transition: all 0.3s ease;
        }
        
        .contact-icon:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        @media (max-width: 768px) {
            .hero-content {
                text-align: center;
            }
            
            .section-title::after {
                left: 50%;
                transform: translateX(-50%);
            }
        }
        
        /* Animações */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease forwards;
        }

        /* Estilos adicionais para melhorar a visualização em PDF */
        @media print {
            body {
                width: 100%;
                margin: 0;
                padding: 0;
            }
            
            section {
                page-break-inside: avoid;
                margin-bottom: 2rem;
            }
            
            .container {
                width: 100%;
                max-width: none;
            }
            
            /* Ajuste para que elementos não sejam cortados */
            .card, .testimonial-card, .project-card {
                page-break-inside: avoid;
            }
        }
    </style>
</head>
<body>
    <!-- Navegação -->
    <nav class="navbar fixed w-full z-10">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="text-white font-bold text-2xl">Paulo<span class="text-blue-300">Nioac</span></div>
            <div class="hidden md:flex space-x-6">
                <a href="#home" class="text-white hover:text-blue-300 transition">Início</a>
                <a href="#about" class="text-white hover:text-blue-300 transition">Sobre</a>
                <a href="#portfolio" class="text-white hover:text-blue-300 transition">Portfólio</a>
                <a href="#blog" class="text-white hover:text-blue-300 transition">Blog</a>
                <a href="#skills" class="text-white hover:text-blue-300 transition">Habilidades</a>
                <a href="#testimonials" class="text-white hover:text-blue-300 transition">Depoimentos</a>
                <a href="#contact" class="text-white hover:text-blue-300 transition">Contato</a>
            </div>
            <button class="md:hidden text-white focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </nav>

    <!-- Header / Hero Section -->
    <header id="home" class="min-h-screen flex items-center text-white">
        <div class="container mx-auto px-4 py-20 md:py-0">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-3/5 hero-content animate-fadeInUp">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Transformando dados em soluções visuais de alto impacto</h1>
                    <p class="text-xl md:text-2xl mb-8 text-blue-200">
                        Paulo Nioac é um Analista de Dados e Designer Visual que une números e narrativas. Com uma carreira abrangendo finanças, energia, governo e design, seu trabalho transforma dados complexos em insights acionáveis e visuais impactantes.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#portfolio" class="btn-primary px-6 py-3 rounded-full font-semibold flex items-center">
                            <i class="fas fa-folder-open mr-2"></i> Ver Projetos
                        </a>
                        <a href="https://www.linkedin.com/in/paulo-nioac-data-analyst-bi/" target="_blank" class="btn-outline px-6 py-3 rounded-full font-semibold flex items-center">
                            <i class="fab fa-linkedin mr-2"></i> LinkedIn
                        </a>
                    </div>
                </div>
                <div class="md:w-2/5 mt-10 md:mt-0 flex justify-center animate-fadeInUp" style="animation-delay: 0.3s;">
                    <div class="relative">
                        <div class="w-72 h-72 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full overflow-hidden flex items-center justify-center border-4 border-white">
                            <div class="flex items-center justify-center text-white">
                                <i class="fas fa-chart-bar text-8xl"></i>
                            </div>
                        </div>
                        <div class="absolute -bottom-6 -right-6 bg-white rounded-lg p-4 shadow-lg">
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-purple-500 rounded-full mr-2"></div>
                                <span class="text-sm font-semibold text-gray-800">Data-Driven & AI</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Visualização de dados estilizada na hero -->
            <div class="mt-16 md:mt-20 bg-white bg-opacity-10 backdrop-filter backdrop-blur-sm rounded-xl p-6 animate-fadeInUp" style="animation-delay: 0.6s;">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold mb-2">20+</div>
                        <div class="text-sm text-blue-200">Business & Design</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold mb-2">8+</div>
                        <div class="text-sm text-blue-200">Tech & Data</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold mb-2">R$6B</div>
                        <div class="text-sm text-blue-200">Energy Portfolio</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="section-title text-3xl md:text-4xl font-bold mb-16 text-center md:text-left">Sobre Mim</h2>
            
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-2/5">
                    <div class="relative">
                        <div class="card p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-3 h-3 bg-red-500 rounded-full mr-2"></div>
                                <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <div class="space-y-4">
                                <div class="h-4 w-3/4 bg-gray-200 rounded"></div>
                                <div class="h-4 w-1/2 bg-gray-200 rounded"></div>
                                <div class="data-chart mt-4">
                                    <div class="data-bar h-40%" style="left: 5%; height: 40%;"></div>
                                    <div class="data-bar h-65%" style="left: 15%; height: 65%;"></div>
                                    <div class="data-bar h-85%" style="left: 25%; height: 85%;"></div>
                                    <div class="data-bar h-55%" style="left: 35%; height: 55%;"></div>
                                    <div class="data-bar h-70%" style="left: 45%; height: 70%;"></div>
                                    <div class="data-bar h-90%" style="left: 55%; height: 90%;"></div>
                                    <div class="data-bar h-75%" style="left: 65%; height: 75%;"></div>
                                    <div class="data-bar h-60%" style="left: 75%; height: 60%;"></div>
                                    <div class="data-bar h-80%" style="left: 85%; height: 80%;"></div>
                                </div>
                                <div class="flex justify-between text-xs text-gray-500">
                                    <span>2002</span>
                                    <span>2025</span>
                                </div>
                                <div class="grid grid-cols-2 gap-2 mt-4">
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-blue-500 rounded-full mr-2"></div>
                                        <span class="text-sm">Energia</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
                                        <span class="text-sm">Finanças</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-purple-500 rounded-full mr-2"></div>
                                        <span class="text-sm">Design</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
                                        <span class="text-sm">Automação</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute -bottom-4 -right-4 bg-gray-100 rounded-lg p-4 shadow-lg">
                            <div class="flex items-center">
                                <i class="fas fa-chart-line text-accent-color mr-2"></i>
                                <span class="text-sm font-semibold">BI & Data Science Projects</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="md:w-3/5">
                    <p class="text-lg mb-6">
                        Com mais de 20 anos em design e negócios, e mais de 8 anos em análise de dados e implementação de IA, 
                        combino criatividade com pensamento estratégico. Trabalhei na gestão de energia renovável na ENBPar 
                        (portfólio de energia de R$6B/ano), negociação algorítmica na Even Flow, e sistemas de sinalização para 
                        aeroportos e estações de metrô.
                    </p>
                    
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold mb-3">Valores:</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="skill-badge">Colaboração</span>
                            <span class="skill-badge">Inovação</span>
                            <span class="skill-badge">Sustentabilidade</span>
                            <span class="skill-badge">Governança</span>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-semibold mb-3">Principais Habilidades:</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex items-start">
                                <div class="mr-3 mt-1 text-accent-color">
                                    <i class="fas fa-code"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Tecnologias</h4>
                                    <p class="text-gray-600">Power BI, SQL, Python, Excel, N8N, AI Tools, AWS, Azure</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="mr-3 mt-1 text-accent-color">
                                    <i class="fas fa-robot"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Ferramentas Avançadas</h4>
                                    <p class="text-gray-600">AI Agents, Machine Learning, Dashboards, Trading Plataform, Adobe Design</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="mr-3 mt-1 text-accent-color">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Análise de Negócios</h4>
                                    <p class="text-gray-600">Análises de Risco, Otimização de Processos, Insights Analiticos, Métricas/KPIs</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="mr-3 mt-1 text-accent-color">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Comunicação</h4>
                                    <p class="text-gray-600">Dashboards, Reports, Apresentações, Ferramentas de Gestão de Projetos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="section-title text-3xl md:text-4xl font-bold mb-16 text-center md:text-left">Portfólio</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Projeto 1 -->
                <div class="card">
                    <div class="h-48 bg-blue-100 overflow-hidden relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-6xl text-blue-500">
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 bg-primary-color text-blue-500 px-3 py-1 text-sm font-semibold">
                            Setor de Energia
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold">ENBPar</h3>
                            <div class="flex space-x-2">
                                <span class="project-tag">MS Tools</span>
                                <span class="project-tag">AI</span>
                            </div>
                        </div>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Gestão de portfólio de energia renovável de 90.000 GWh/ano (~R$6B em receita anual)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Modelagem de dados para otimização de contratos e planejamento financeiro de longo prazo</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Desenvolvimento de dashboards em Power BI para suporte à decisão multidepartamental</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Análise estatística e previsões para melhorar precisão orçamentária e planejamento energético</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Projeto 2 -->
                <div class="card">
                    <div class="h-48 bg-green-100 overflow-hidden relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-6xl text-green-500">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 bg-primary-color text-green-500 px-3 py-1 text-sm font-semibold">
                            Finanças
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold">Even Flow</h3>
                            <div class="flex space-x-2">
                                <span class="project-tag">Algoritmos</span>
                                <span class="project-tag">AWS</span>
                            </div>
                        </div>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Indicadores de trading de alta frequência (80% de precisão)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Redução de risco em 35% com estratégias algorítmicas dinâmicas</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Dashboards em tempo real (Power BI + Python/Plotly)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Pipeline de dados AWS para processamento de 1M+ operações/dia</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Projeto 3 -->
                <div class="card">
                    <div class="h-48 bg-yellow-100 overflow-hidden relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-6xl text-yellow-500">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 bg-primary-color text-yellow-500 px-3 py-1 text-sm font-semibold">
                            Startup
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold">GreenAnt</h3>
                            <div class="flex space-x-2">
                                <span class="project-tag">Machine Learning</span>
                                <span class="project-tag">Venture Capital</span>
                            </div>
                        </div>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Modelos de ML para monitorar consumo individual de energia</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Liderança no refinamento de produto e modelo de negócio para escalabilidade</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Redução média de 25% no consumo de energia dos clientes</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Sistema IoT integrado monitorando 10k+ dispositivos em tempo real</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Projeto 4 -->
                <div class="card">
                    <div class="h-48 bg-purple-100 overflow-hidden relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-6xl text-purple-500">
                                <i class="fas fa-map-signs"></i>
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 bg-primary-color text-purple-500 px-3 py-1 text-sm font-semibold">
                            Wayfinding
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold">Metro Rio</h3>
                            <div class="flex space-x-2">
                                <span class="project-tag">Data Analytics</span>
                                <span class="project-tag">UX Design</span>
                            </div>
                        </div>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Análise de fluxo de 900K passageiros/dia para otimização de rotas</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Redução de 40% no tempo de transferência durante eventos de alta demanda</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Sistema de sinalização baseado em análise comportamental de usuários</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Implementação de métricas de eficiência para 41 estações</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Projeto 5 -->
                <div class="card">
                    <div class="h-48 bg-red-100 overflow-hidden relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-6xl text-red-500">
                                <i class="fas fa-building"></i>
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 bg-primary-color text-red-500 px-3 py-1 text-sm font-semibold">
                            Real Estate
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold">Laxim Mais</h3>
                            <div class="flex space-x-2">
                                <span class="project-tag">Business Analytics</span>
                                <span class="project-tag">Design</span>
                            </div>
                        </div>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Análise de mercado e segmentação para 20+ lançamentos imobiliários</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Desenvolvimento de identidade visual e materiais promocionais</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Otimização de campanhas com base em dados de conversão</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Aumento de 35% na taxa de conversão de leads qualificados</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Projeto 6 -->
                <div class="card">
                    <div class="h-48 bg-indigo-100 overflow-hidden relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-6xl text-indigo-500">
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 bg-primary-color text-indigo-500 px-3 py-1 text-sm font-semibold">
                            E-commerce
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold">Moda Feminina</h3>
                            <div class="flex space-x-2">
                                <span class="project-tag">CRM Analytics</span>
                                <span class="project-tag">Data Science</span>
                            </div>
                        </div>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Implementação de sistema de recomendação com ML (CTR +45%)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Análise de cohort para otimização de retenção de clientes</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Redução de 30% no CAC através de segmentação avançada</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Dashboard de KPIs em tempo real para equipe comercial</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="section-title text-3xl md:text-4xl font-bold mb-16 text-center md:text-left">Blog / Artigos</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Artigo 1 -->
                <div class="card article-card">
                    <div class="p-6">
                        <span class="text-sm text-gray-500 mb-2 block">Baseado no Relatório Estratégico da AWS 2024</span>
                        <h3 class="text-xl font-bold mb-4">IA Generativa: Reformulando a Tomada de Decisões na Era Pós-Modelo</h3>
                        <p class="text-gray-600 mb-6">
                            A proliferação das tecnologias de IA generativa marca uma virada decisiva na forma como as organizações 
                            estruturam seus processos de tomada de decisão. Em vez de servirem apenas como motores de criação de conteúdo, 
                            os sistemas generativos estão remodelando a arquitetura da lógica de negócios, previsão e engajamento do cliente.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-blue-300 rounded-full flex items-center justify-center mr-2">
                                    <span class="text-white font-bold">PN</span>
                                </div>
                                <span class="text-sm text-gray-500">Paulo Nioac</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Artigo 2 -->
                <div class="card article-card">
                    <div class="p-6">
                        <span class="text-sm text-gray-500 mb-2 block">Dos laboratórios de inovação aos cenários rurais</span>
                        <h3 class="text-xl font-bold mb-4">Energias Renováveis Descentralizadas: O Próximo Capítulo em Sistemas de Baixo Impacto</h3>
                        <p class="text-gray-600 mb-6">
                            Os esforços de transição energética global estão cada vez mais se voltando para renováveis de baixa pegada 
                            e alta eficiência como uma contra-narrativa ao paradigma da megaestrutura. Ao longo de 2024, vários países 
                            aceleraram a implementação de tecnologias que fornecem não apenas energia limpa, mas também mínima 
                            perturbação ecológica e deslocamento social.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-blue-300 rounded-full flex items-center justify-center mr-2">
                                    <span class="text-white font-bold">PN</span>
                                </div>
                                <span class="text-sm text-gray-500">Paulo Nioac</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Artigo 3 -->
                <div class="card article-card">
                    <div class="p-6">
                        <span class="text-sm text-gray-500 mb-2 block">Relatório Estratégico de Pessoas & Dados – 2025</span>
                        <h3 class="text-xl font-bold mb-4">Mediação Intercultural: A Infraestrutura Oculta do Trabalho Remoto Global</h3>
                        <p class="text-gray-600 mb-6">
                            Em uma economia digital pós-pandemia, a arquitetura da colaboração remota está sendo silenciosamente 
                            mantida por um novo papel profissional: o mediador cultural. Enquanto estruturas ágeis e ferramentas em 
                            nuvem definem a estrutura, é a compreensão interpessoal que muitas vezes determina se projetos multinacionais 
                            têm sucesso ou implodem.
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-blue-300 rounded-full flex items-center justify-center mr-2">
                                    <span class="text-white font-bold">PN</span>
                                </div>
                                <span class="text-sm text-gray-500">Paulo Nioac</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="section-title text-3xl md:text-4xl font-bold mb-16 text-center md:text-left">Depoimentos</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Depoimento 1 -->
                <div class="testimonial-card card p-6">
                    <p class="text-gray-600 italic mb-6">
                        "Paulo transforma dados complexos em insights com clareza e criatividade. Uma mente brilhante e um pensador estratégico."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-300 rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold">VA</span>
                        </div>
                        <div>
                            <h4 class="font-bold">Valéria Alves</h4>
                            <p class="text-sm text-gray-500">Advogada</p>
                        </div>
                    </div>
                </div>
                
                <!-- Depoimento 2 -->
                <div class="testimonial-card card p-6">
                    <p class="text-gray-600 italic mb-6">
                        "Transformou o Plano Anual do Proinfa em um relatório claro e intuitivo utilizado por reguladores e executivos."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-300 rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold">RS</span>
                        </div>
                        <div>
                            <h4 class="font-bold">Rana Santos</h4>
                            <p class="text-sm text-gray-500">Supervisora</p>
                        </div>
                    </div>
                </div>
                
                <!-- Depoimento 3 -->
                <div class="testimonial-card card p-6">
                    <p class="text-gray-600 italic mb-6">
                        "Excelente comunicação, mentalidade de inovação e um excelente solucionador de problemas."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-300 rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-bold">RB</span>
                        </div>
                        <div>
                            <h4 class="font-bold">Ricardo Brigante</h4>
                            <p class="text-sm text-gray-500">Gerente</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills & Certifications Section -->
    <section id="skills" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="section-title text-3xl md:text-4xl font-bold mb-16 text-center md:text-left">Habilidades & Certificações</h2>
            
            <div class="flex flex-col md:flex-row gap-12">
                <div class="md:w-1/2">
                    <h3 class="text-xl font-semibold mb-6">Habilidades Técnicas</h3>
                    
                    <div class="space-y-4 mb-8">
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-semibold">Power BI</span>
                                <span>95%</span>
                            </div>
                            <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-2 bg-accent-color rounded-full" style="width: 100%">
                                    <div class="h-full bg-blue-400 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-semibold">SQL</span>
                                <span>95%</span>
                            </div>
                            <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-2 bg-accent-color rounded-full" style="width: 100%">
                                    <div class="h-full bg-blue-400 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-semibold">Excel</span>
                                <span>90%</span>
                            </div>
                            <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-2 bg-accent-color rounded-full" style="width: 100%">
                                    <div class="h-full bg-blue-400 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-semibold">Design</span>
                                <span>85%</span>
                            </div>
                            <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-2 bg-accent-color rounded-full" style="width: 100%">
                                    <div class="h-full bg-blue-400 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-semibold">Python</span>
                                <span>80%</span>
                            </div>
                            <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-2 bg-accent-color rounded-full" style="width: 100%">
                                    <div class="h-full bg-blue-400 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="font-semibold">AI Agent</span>
                                <span>75%</span>
                            </div>
                            <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-2 bg-accent-color rounded-full" style="width: 100%">
                                    <div class="h-full bg-blue-400 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="text-xl font-semibold mb-6">Ferramentas</h3>
                    
                    <div class="flex flex-wrap gap-2 mb-10">
                        <span class="skill-badge">Power BI</span>
                        <span class="skill-badge">Tableau</span>
                        <span class="skill-badge">Excel</span>
                        <span class="skill-badge">AutoCAD</span>
                        <span class="skill-badge">Jupyter</span>
                        <span class="skill-badge">VSCode/Cursor</span>
                        <span class="skill-badge">MS Tools</span>
                        <span class="skill-badge">Adobe Suite</span>
                        <span class="skill-badge">Figma</span>
                        <span class="skill-badge">N8N</span>
                        <span class="skill-badge">Supabase</span>
                    </div>
                </div>
                
                <div class="md:w-1/2">
                    <h3 class="text-xl font-semibold mb-6">Certificações</h3>
                    
                    <div class="space-y-6">
                        <div class="card p-4 flex items-start">
                            <div class="mr-4 text-2xl text-accent-color">
                                <i class="fas fa-award"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Data Science and Analytics</h4>
                                <p class="text-sm text-gray-600">ASN.Rocks</p>
                                <div class="mt-2 flex flex-wrap gap-2">
                                    <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded">Machine Learning</span>
                                    <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded">Statistical Analysis</span>
                                    <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded">Python</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card p-4 flex items-start">
                            <div class="mr-4 text-2xl text-accent-color">
                                <i class="fas fa-robot"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Data Science & Artificial Intelligence</h4>
                                <p class="text-sm text-gray-600">DataTech Florida</p>
                                <div class="mt-2 flex flex-wrap gap-2">
                                    <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded">AI</span>
                                    <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded">Deep Learning</span>
                                    <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded">Data Analysis</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card p-4 flex items-start">
                            <div class="mr-4 text-2xl text-accent-color">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Data Analysis and Management for Public Organizations</h4>
                                <p class="text-sm text-gray-600">ENAP - Escola Nacional de Administração Pública</p>
                                <div class="mt-2 flex flex-wrap gap-2">
                                    <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded">Data Management</span>
                                    <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded">Public Sector</span>
                                    <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded">Analytics</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="text-xl font-semibold my-6">Formação Acadêmica</h3>
                    
                    <div class="space-y-6">
                        <div class="card p-4 flex items-start">
                            <div class="mr-4 text-2xl text-accent-color">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Bacharelado em Design Industrial - Projeto & Produto</h4>
                                <p class="text-sm text-gray-600">Centro Universitário da Cidade</p>
                                <p class="text-xs text-gray-500 mt-1">2002-2006</p>
                            </div>
                        </div>
                        
                        <div class="card p-4 flex items-start">
                            <div class="mr-4 text-2xl text-accent-color">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Técnico em Engenharia Civil</h4>
                                <p class="text-sm text-gray-600">Universidade Gama Filho</p>
                                <p class="text-xs text-gray-500 mt-1">1998-2000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-primary-color text-gray-600">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-16 text-center">Entre em Contato</h2>
            
            <div class="flex flex-col md:flex-row gap-12">
                <div class="md:w-1/2">
                    <form class="space-y-6">
                        <div>
                            <label class="block mb-2 font-medium" for="name">Nome</label>
                            <input type="text" id="name" class="w-full p-3 rounded-lg bg-gray-600 bg-opacity-10 border border-white border-opacity-20 focus:outline-none focus:border-blue-300 transition" placeholder="Seu nome">
                        </div>
                        <div>
                            <label class="block mb-2 font-medium" for="email">Email</label>
                            <input type="email" id="email" class="w-full p-3 rounded-lg bg-gray-600 bg-opacity-10 border border-white border-opacity-20 focus:outline-none focus:border-blue-300 transition" placeholder="seu@email.com">
                        </div>
                        <div>
                            <label class="block mb-2 font-medium" for="message">Mensagem</label>
                            <textarea id="message" rows="5" class="w-full p-3 rounded-lg bg-gray-600 bg-opacity-10 border border-white border-opacity-20 focus:outline-none focus:border-blue-300 transition" placeholder="Sua mensagem aqui..."></textarea>
                        </div>
                        <button type="submit" class="btn-primary px-6 py-3 rounded-lg font-semibold w-full">Enviar Mensagem</button>
                    </form>
                </div>
                
                <div class="md:w-1/2">
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold mb-4">Informações de Contato</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Email</h4>
                                    <a href="mailto:paulo@nioac.com" class="text-blue-500 hover:text-white transition">paulo@nioac.com</a>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Localização</h4>
                                    <p class="text-blue-500">Rio de Janeiro, Brasil</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="contact-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold">LinkedIn</h4>
                                    <a href="https://www.linkedin.com/in/paulo-nioac-data-analyst-bi/" target="_blank" class="text-blue-500 hover:text-white transition">https://www.linkedin.com/in/paulo-nioac-data-analyst-bi/</a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- Commented out for later use
                    <div>
                        <h3 class="text-xl font-semibold mb-4">Disponibilidade</h3>
                        <p class="mb-4">
                            Disponível para consultorias, projetos freelance e oportunidades de emprego full-time em áreas relacionadas à análise de dados, automação e design visual.
                        </p>
                        <p class="text-blue-200">
                            Respondo a todos os contatos dentro de 24 horas. Ficarei feliz em discutir como podemos trabalhar juntos!
                            
                        </p>
                         -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 bg-gray-900 text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-center md:text-left mb-4 md:mb-0">
                    <div class="text-xl font-bold mb-2">Paulo<span class="text-blue-300">Nioac</span></div>
                    <p class="text-gray-400 text-sm">Transformando dados em soluções visuais de alto impacto</p>
                </div>
                
                <div class="flex space-x-4">
                    <a href="https://www.linkedin.com/in/paulo-nioac-data-analyst-bi/" target="_blank" class="text-gray-400 hover:text-white transition">
                        <i class="fab fa-linkedin fa-lg"></i>
                    </a>
                    <a href="mailto:paulo@nioac.com" class="text-gray-400 hover:text-white transition">
                        <i class="fas fa-envelope fa-lg"></i>
                    </a>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-6 pt-6 text-center text-sm text-gray-500">
                &copy; 2025 Paulo Nioac. Todos os direitos reservados.
            </div>
        </div>
    </footer>
    
    <script>
        // Animação das barras do gráfico quando se torna visível
        function animateCharts() {
            const bars = document.querySelectorAll('.data-bar');
            bars.forEach(bar => {
                const height = bar.style.height;
                bar.style.height = '0';
                setTimeout(() => {
                    bar.style.height = height;
                }, 100);
            });
        }
        
        // Iniciar animações quando a página carrega
        document.addEventListener('DOMContentLoaded', () => {
            animateCharts();
            
            // Menu mobile toggle
            const menuButton = document.querySelector('.md\\:hidden');
            const mobileMenu = document.querySelector('.md\\:flex');
            
            menuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
            
            // Smooth scrolling para âncoras
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                    
                    // Fechar menu mobile se estiver aberto
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                });
            });
        });
    </script>
</body>
</html>
