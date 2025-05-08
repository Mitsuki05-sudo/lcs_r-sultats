<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LCS_Results - Université Les Cours Sonou</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
        
        :root {
            --primary-blue: #e0e7ff;
            --secondary-blue: #93c5fd;
            --accent-red: #fca5a5;
            --light-gray: #e5e7eb;
            --dark-gray: #9ca3af;
            --glass-blur: 8px;
            --dark-bg: rgba(15, 23, 42, 0.85);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            color: var(--primary-blue);
            min-height: 100vh;
            background: linear-gradient(rgba(14, 13, 13, 0.7), rgba(0,0,0,0.7)), 
                        url('01.jpg') no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }
        
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: inherit;
            filter: blur(var(--glass-blur)) brightness(0.7);
            z-index: -1;
            margin: -20px;
        }
        
        .header-logos {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
        }
        
        .logo-left, .logo-right {
            height: 100px;
            width: auto;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px 20px;
            text-align: center;
        }
        
        .logo {
            margin-bottom: 30px;
            position: relative;
        }
        
        .logo h1 {
            font-size: 2.5rem;
            margin: 10px 0;
            color: var(--primary-blue);
            text-shadow: 0 2px 4px rgba(0,0,0,0.5);
        }
        
        .logo .univ-name {
            font-weight: 700;
            color: var(--secondary-blue);
        }
        
        .slogan {
            font-style: italic;
            color: var(--dark-gray);
            margin-bottom: 30px;
            font-size: 1.2rem;
        }
        
        .platform-name {
            font-size: 2.2rem;
            font-weight: 700;
            margin: 25px 0;
            color: var(--accent-blue);
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.5);
        }
        
        .portals-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 30px;
        }
        
        .portal-box {
            background: rgba(15, 23, 42, 0.6);
            border-radius: 12px;
            padding: 20px;
            width: 280px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            border-top: 3px solid var(--secondary-blue);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.1);
        }
        
        .portal-box:hover {
            transform: translateY(-5px);
            background: rgba(15, 23, 42, 0.8);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.4);
        }
        
        .portal-icon {
            font-size: 2rem;
            margin-bottom: 15px;
            color: var(--secondary-blue);
        }
        
        .portal-title {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--primary-blue);
            font-weight: 600;
        }
        
        .portal-desc {
            color: var(--dark-gray);
            margin-bottom: 15px;
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--secondary-blue), #3b82f6);
            color: #1e293b;
            padding: 8px 18px;
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.3s;
            font-size: 0.9rem;
            font-weight: 500;
            margin-top: 10px;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0,0,0,0.2);
        }
        
        .btn:hover {
            background: linear-gradient(135deg, #3b82f6, var(--secondary-blue));
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.3);
        }
        
        .btn i {
            margin-left: 6px;
            font-size: 0.8rem;
        }
        
        .admin-box {
            border-top-color: var(--accent-blue);
        }
        
        .admin-box .portal-icon {
            color: var(--accent-blue);
        }
        
        .admin-box .btn {
            background: linear-gradient(135deg, var(--accent-red),rgb(39, 8, 240));
            color: white;
        }
        
        .admin-box .btn:hover {
            background: linear-gradient(135deg, #ef4444, var(--accent-red));
        }
        
        .footer {
            margin-top: 40px;
            color: var(--dark-gray);
            font-size: 0.8rem;
        }
        
        .contact-footer {
            background: rgba(15, 23, 42, 0.7);
            padding: 20px;
            border-radius: 10px;
            margin-top: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }
        
        .contact-logo {
            height: 50px;
            width: auto;
            opacity: 0.8;
        }
        
        .contact-info {
            text-align: center;
            font-size: 0.9rem;
            line-height: 1.6;
        }
        
        .contact-info strong {
            color: var(--secondary-blue);
            display: block;
            margin-bottom: 5px;
            font-size: 1rem;
        }
        
        .contact-info a {
            color: var(--primary-blue);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .contact-info a:hover {
            color: var(--secondary-blue);
            text-decoration: underline;
        }
        
        @media (max-width: 600px) {
            .portals-container {
                flex-direction: column;
                align-items: center;
            }
            
            .portal-box {
                width: 100%;
                max-width: 300px;
            }
            
            body::before {
                --glass-blur: 5px;
            }
            
            .header-logos {
                padding: 10px;
            }
            
            .logo-left, .logo-right {
                height: 40px;
            }
            
            .contact-footer {
                flex-direction: column;
                text-align: center;
                padding: 15px;
            }
            
            .contact-logo {
                height: 40px;
                margin-bottom: 10px;
            }
        }
        
        .quick-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin: 30px 0;
        }
        
        .quick-link {
            color: var(--dark-gray);
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 20px;
            background: rgba(255,255,255,0.1);
            transition: all 0.3s;
            font-size: 0.9rem;
        }
        
        .quick-link:hover {
            background: rgba(255,255,255,0.2);
            color: var(--secondary-blue);
        }
        
    </style>
</head>
<body>
    <div class="header-logos">
        <img src="03.webp" alt="Logo gauche" class="logo-left">
        <img src="02.webp" alt="Logo droit" class="logo-right">
    </div>

    <div class="container">
        <div class="logo">
            <h1><span class="univ-name">Les Cours Sonou</span> Université</h1>
            <div class="slogan">L'excellence académique à votre portée</div>
        </div>

        <div class="quick-links">
            <a href="#" class="quick-link"><i class="fas fa-book"></i> Calendrier académique</a>
        </div>

        <div class="platform-name">LCS_Results</div>

        <div class="portals-container">
            <div class="portal-box admin-box">
                <div class="portal-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="portal-title">Administration</div>
                <div class="portal-desc">
                    Accès sécurisé aux outils de gestion universitaire pour le personnel administratif.
                </div>
                <a href="login_admin.php" class="btn">Accéder <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="portal-box">
                <div class="portal-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="portal-title">Étudiants & Enseignants</div>
                <div class="portal-desc">
                    Espace dédié à la consultation des résultats et ressources pédagogiques.
                </div>
                <a href="fil.php" class="btn">Accéder <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="contact-footer">
            
            <div class="contact-info">
                <center><strong>Site de CABOMA</strong></center>
                Immeuble LES COURS SONOU - Parcelle b, Lot 66 du R.F.U Caboma - Atinkanmey<br>
                Téléphone: <a href="tel:+22960412121">+229 60412121</a> / <a href="tel:+22960412525">60412525</a> / <a href="tel:+22921315670">21315670</a>
            </div>
        </div>
    </div>
</body>
</html>
