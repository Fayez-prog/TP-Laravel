<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <!-- Logo e-commerce premium : Panier stylisé + tag -->
    <defs>
        <linearGradient id="MainGradient" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" stop-color="#2563EB"/> <!-- Bleu professionnel -->
            <stop offset="100%" stop-color="#1E40AF"/> <!-- Bleu foncé -->
        </linearGradient>
        <linearGradient id="TagGradient" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" stop-color="#10B981"/> <!-- Vert positif -->
            <stop offset="100%" stop-color="#059669"/>
        </linearGradient>
    </defs>
    
    <!-- Panier moderne -->
    <path fill="url(#MainGradient)" d="M405.3 160H106.7c-23.6 0-42.7 19.1-42.7 42.7v202.7c0 23.6 19.1 42.7 42.7 42.7h298.7c23.6 0 42.7-19.1 42.7-42.7V202.7c0-23.6-19.1-42.7-42.7-42.7z" rx="16" ry="16"/>
    
    <!-- Ouverture du panier -->
    <path fill="#EFF6FF" d="M405.3 128H106.7c-5.9 0-10.7 4.8-10.7 10.7v21.3c0 5.9 4.8 10.7 10.7 10.7h298.7c5.9 0 10.7-4.8 10.7-10.7v-21.3c0-5.9-4.8-10.7-10.7-10.7z"/>
    
    <!-- Poignée -->
    <path fill="#1E3A8A" d="M352 96c0-8.8 7.2-16 16-16s16 7.2 16 16v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V96z"/>
    
    <!-- Articles dans le panier -->
    <g fill="#F59E0B"> <!-- Jaune attractif -->
        <circle cx="160" cy="280" r="24"/>
        <circle cx="256" cy="320" r="32"/>
        <circle cx="352" cy="260" r="20"/>
    </g>
    
    <!-- Tag promo (optionnel) -->
    <path fill="url(#TagGradient)" d="M416 96c0-17.7 14.3-32 32-32s32 14.3 32 32v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V96z" transform="rotate(15 448 128)"/>
    <text x="448" y="120" font-family="Arial" font-size="24" font-weight="bold" text-anchor="middle" fill="white">%</text>
</svg>