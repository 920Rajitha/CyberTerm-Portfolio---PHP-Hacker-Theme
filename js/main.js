// Hacker terminal effects
document.addEventListener('DOMContentLoaded', function() {
    // Add hacker theme class to body
    document.body.classList.add('hacker-theme');
    
    // Matrix rain effect
    const matrixRain = document.querySelector('.matrix-rain');
    if (matrixRain) {
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
            
            // Remove column after animation completes
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
    }
    
    // Terminal cursor blink
    const blinkingElement = document.querySelector('.blinking');
    if (blinkingElement) {
        setInterval(() => {
            blinkingElement.style.visibility = blinkingElement.style.visibility === 'hidden' ? 'visible' : 'hidden';
        }, 500);
    }
    
    // Animate skill bars on scroll
    const animateSkills = function() {
        const skillBars = document.querySelectorAll('.skill-level');
        
        skillBars.forEach(bar => {
            const rect = bar.parentElement.getBoundingClientRect();
            const isVisible = (rect.top <= window.innerHeight) && (rect.bottom >= 0);
            
            if (isVisible && !bar.classList.contains('animated')) {
                bar.classList.add('animated');
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = width;
                }, 100);
            }
        });
    };
    
    window.addEventListener('scroll', animateSkills);
    animateSkills();
    
    // Terminal typing effect
    const typeWriter = function() {
        const commands = document.querySelectorAll('.command');
        const outputs = document.querySelectorAll('.output');
        
        commands.forEach((cmd, index) => {
            cmd.style.width = '0';
            setTimeout(() => {
                cmd.style.width = '100%';
                
                if (outputs[index]) {
                    setTimeout(() => {
                        outputs[index].style.width = '0';
                        outputs[index].style.opacity = '1';
                        setTimeout(() => {
                            outputs[index].style.width = '100%';
                        }, 500);
                    }, 500);
                }
            }, index * 1000);
        });
    };
    
    setTimeout(typeWriter, 1000);
});