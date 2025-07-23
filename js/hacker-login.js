document.addEventListener('DOMContentLoaded', function() {
    // Matrix rain effect
    const matrixRain = document.querySelector('.matrix-rain');
    const chars = "01アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワヲン";
    
    function createColumn() {
        const column = document.createElement('div');
        column.className = 'matrix-column';
        column.style.left = Math.random() * 100 + 'vw';
        column.style.animationDuration = (Math.random() * 2 + 1) + 's';
        column.style.opacity = Math.random() * 0.5 + 0.1;
        
        const length = Math.floor(Math.random() * 20) + 10;
        for (let i = 0; i < length; i++) {
            const char = document.createElement('span');
            char.textContent = chars[Math.floor(Math.random() * chars.length)];
            char.style.animationDelay = (i * 0.1) + 's';
            char.style.color = `hsl(${Math.random() * 60 + 100}, 100%, 50%)`;
            column.appendChild(char);
        }
        
        matrixRain.appendChild(column);
        
        setTimeout(() => {
            column.remove();
        }, parseFloat(column.style.animationDuration) * 1000);
    }
    
    // Create initial columns
    for (let i = 0; i < 50; i++) {
        setTimeout(createColumn, i * 200);
    }
    
    // Continue creating columns
    setInterval(createColumn, 200);
    
    // Focus on input field
    const usernameInput = document.getElementById('username');
    setTimeout(() => {
        usernameInput.focus();
    }, 3500);
    
    // Form submission effect
    const form = document.querySelector('.login-form');
    form.addEventListener('submit', function(e) {
        const btn = this.querySelector('button');
        btn.textContent = 'AUTHENTICATING...';
        btn.disabled = true;
        
        // Simulate processing delay
        setTimeout(() => {
            btn.innerHTML = '<i class="fas fa-check"></i> ACCESS GRANTED';
        }, 1000);
    });
});