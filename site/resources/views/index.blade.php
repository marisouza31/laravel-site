<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola Tecnica Zona Leste</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="header">
        <a href="#" class="logo"> <i><img src="{{ asset('assets/logo-etec.webp')}}" width="37" height="27"></i>ETEC</a>
        <nav class="navbar">
            <a href="#home" class="active">Inicio</a>
            <a href="#quem-somos">Quem somos</a>
            <a href="#noticias">Noticias</a>
            <a href="#cursos">Cursos</a>
            <a href="#contatos">Contatos</a>
        </nav>
        <div></div>
    </header>


    <section class="home" id="home">
        <div class="content">
            <h3>Site institucional <span>ETEC</span></h3>
            <p>Conheça nossa escola!</p>
        </div>
    </section>


    <section class="quem-somos" id="quem-somos">

        <h1 class="heading">
            <span>q</span>
            <span>u</span>
            <span>e</span>
            <span>m</span>
            <span class="space"></span>
            <span>s</span>
            <span>o</span>
            <span>m</span>
            <span>o</span>
            <span>s</span>
            <span>?</span>
        </h1>

        <div class="container text-center">
            <div class="row">
              <div class="col d-flex align-items-center">
                <div class="col" style="text-align: center;">
                    <p class="h6" style="font-size: 20px; text-align: center;">
                        Somos um centro de excelência em educação técnica e profissionalizante. Desde a nossa fundação, temos orgulho em oferecer uma educação de qualidade, preparando os alunos para os desafios do mercado de trabalho e para contribuírem de forma significativa para a sociedade.
                    </p>
                </div>
                
                
              </div>
    </section>

    <section class="noticias" id="noticias">

        <h1 class="heading">
            <span>n</span>
            <span>o</span>
            <span>t</span>
            <span>i</span>
            <span>c</span>
            <span>i</span>
            <span>a</span>
            <span>s</span>
        </h1>

        <div class="row" style="text-align: center;">

            <div class="image">
                <img src="{{ asset('assets/lab-etec.webp')}}" alt="" width="700" height="700">
            </div>
            
        
            <div class="content" style="font-size: 1.5rem;">
                <h3>Infraestrutura Moderna</h3>
                <p>Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores, notebooks, impressoras 3D e muitos outros componentes propícios aos projetos que desenvolvemos durante a jornada dos estudantes. Na ETEC Zona Leste, você encontrará um ambiente favorável para o impulsionar seu crescimento acadêmico e profissional.</p>
            </div>
            <br>
            
        </div>
        
        <div class="row reverse" style="text-align: center;">
        
            <div class="image">
                <img src= "{{ asset('assets/auditorio.webp')}}" alt="" width="700" height="700">
            </div>
            <div class="content" style="font-size: 1.5rem;">
                <h3>Aprendizados para além da sala de aula</h3>
                <p>Buscamos levar o conhecimento para além da sala de aula tradicional. Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira. Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil, oferecendo suporte abrangente, orientação vocacional e programas extracurriculares.</p>
            </div>
            <br>
        
        </div>
        
        <div class="row" style="text-align: center;">
        
            <div class="image">
                <img src="{{ asset('assets/escada.webp')}}" alt="" width="700" height="700">
            </div>
        
            <div class="content" style="font-size: 1.5rem;">
                <h3>Descubra um futuro brilhante na ETEC Zona Leste</h3>
                <p>Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossos cursos técnicos são ministrados por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
            </div>
            <br>
            
        </div>
        
    </section>
    <section class="cursos" id="cursos">

        <h1 class="heading">
            <span>c</span>
            <span>u</span>
            <span>r</span>
            <span>s</span>
            <span>o</span>
            <span>s</span>
        </h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="{{ asset('assets/ds.jpg')}}" alt="">
                    <div class="share">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-link"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Novotec Desenvolvimento de sistemas - AMS</h3>
                    <ul>
                    <p class="p">O aluno ingressa no Ensino Médio com Habilitação Profissional de Técnico no curso, cursa os 3 anos de Ensino Médio-Técnico já na Fatec Zona Leste, podendo, após concluir esta fase, ingressar diretamente sem processo seletivo (vestibular) no Curso Superior em Análise e Desenvolvimento de Sistemas (ADS-AMS) na Fatec Zona Leste
                    </p>
                    </ul>
                    <div class="icons">
                        <span><i class=""></i> 1 de janeiro, 2024</span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('assets/contabilidade.webp')}}" alt="">
                    <div class="share">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-link"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Contabilidade</h3>
                    <ul>
                    <p class="p">Além da matemática básica, o estudante aprenderá matemática financeira, utilizada para operações de financiamento e cálculo de taxas de juros, por exemplo. O aluno também vai conhecer quais são as regras da contabilidade e todas as leis que estabelecem o que as empresas podem fazer e quais impostos devem pagar.</p>
                    </ul>
                    <div class="icons">
                        <span><i class=""></i> 1 de janeiro, 2024</span>
                    </div>
                </div>
            </div>
            
            <div class="box">
                <div class="image">
                    <img src="{{ asset('assets/gestor-de-recursos-humanos.webp')}}" alt="">
                    <div class="share">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-link"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Recursos Humanos</h3>
                    <ul>
                        <p class="p">Aplica testes em processos seletivos; realiza cálculos para determinar os valores que serão descontados no salário dos funcionários, além de porcentagem referente a benefícios; insere informações no sistema para a geração de demonstrativos de pagamentos; cuida da documentação necessária para aposentadoria,  </p>
                    </ul>
                    <div class="icons">
                        <span><i class=""></i> 1 de janeiro, 2024</span>
                    </div>
                </div>
            </div>
          
            <div class="box">
                <div class="image">
                    <img src="{{ asset('assets/administracao.jpg')}}" alt="">
                    <div class="share">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-link"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Administração</h3>
                    <ul>
                     <p class="p">O aluno vai aprender ainda a analisar as chances de um negócio ou produto ser bem-sucedido e o comportamento do consumidor. Estudará também técnicas de atendimento ao cliente, empreendedorismo (iniciativas para realizar novos negócios) e como uma organização planeja alcançar seus objetivos e define suas metas para o futuro.
</p>
                    </ul>
                    <div class="icons">
                        <span><i class=""></i> 1 de janeiro, 2024</span>
                    </div>
                </div>
            </div>
            

            <div class="box">
                <div class="image">
                    <img src="{{ asset('assets/logistica-de-transporte.jpg')}}" alt="">
                    <div class="share">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-link"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Logistica</h3>
                    <ul>
                        <p class="p">O estudante vai aprender como se deve movimentar as cargas e os produtos dentro de um estoque para decidir se utilizará, por exemplo, um carrinho ou uma empilhadeira, e como se deve armazenar cada tipo de produto e por quanto tempo. 
                            Vai estudar ainda sobre a entrega das mercadorias compradas pelos clientes. </p>
                    </ul>
                    <div class="icons">
                        <span><i class=""></i> 1 de janeiro, 2024</span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('assets/juridicos.jpg')}}" alt="">
                    <div class="share">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-link"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Serviços Juridicos</h3>
                    <ul>
               <p class="p">O estudante vai conhecer como são elaborados e redigidos os processos, contratos e documentos jurídicos. Além de aprender sobre as leis, o aluno vai estudar conceitos de administração de empresas, matemática financeira, técnicas de atendimento ao cliente e inglês instrumental.
                 A língua portuguesa é fundamental.</p>
                    </ul>
                    <div class="icons">
                        <span><i class=""></i> 1 de janeiro, 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contatos" id="contatos">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>t</span>
            <span>0</span>
        </h1>

        </div>
    </section>

    <section class="footer">
        <div class="box-container" style="text-align: center;">
        <div class="box" style="display: inline-block; margin: 0 auto;">
        <h3>Rede Sociais</h3>
    <p>Nos siga nas redes sociais:</p>
    <div class="share">
        <a href="https://www.facebook.com/Eteczonalesteoficial/?locale=pt_BR" class="fab fa-facebook-f">Facebook</a><br>
        <a href="https://twitter.com/i/flow/login?redirect_after_login=%2FEtecZona" class="fab fa-twitter">Twitter</a><br>
        <a href="https://www.instagram.com/eteczonalesteoficial/" class="fab fa-instagram">Instagram</a><br>
        <a href="https://www.linkedin.com/company/etec-zona-leste?trk=companies_directory" class="fab fa-linkedin">LinkedIn</a>
    </div>
</div>

        
            <div class="box" style="display: inline-block; margin: 0 auto;">
                <h3>contatos</h3>
                <a href="#" class="links">+55(11) 2045-4000</a>
                <a href="#" class="links">+55(11) 1145-4016</a>
                <a href="#" class="links">eteczonaleste@gmail.com</a>
            </div>
        
            <div class="box" style="display: inline-block; margin: 0 auto;">
                <h3>localização</h3>
                <p>Águia de Haia, 2633 <br>
                    Cidade A.E. Carvalho<br>
                    São Paulo/SP</p>
            </div>
        </div>
        
        <div class="credit"> Escola Técnica <span>Zona Leste</span></div>
    </section>
                        <!-- API de Libras -->
                        <div vw class="enabled">
                        <div vw-access-button class="active"></div>
                        <div vw-plugin-wrapper>
                            <div class="vw-plugin-top-wrapper"></div>
                        </div>
                    </div>
                    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
                    <script>
                        new window.VLibras.Widget('https://vlibras.gov.br/app');
                    </script>
                </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>