import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// ===== Advanced JavaScript Framework =====

// 1. Utility Functions
const Utils = {
    debounce(func, delay) {
        let timeoutId;
        return function(...args) {
            clearTimeout(timeoutId);
            timeoutId = setTimeout(() => func.apply(this, args), delay);
        };
    },
    
    throttle(func, limit) {
        let inThrottle;
        return function(...args) {
            if (!inThrottle) {
                func.apply(this, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    },
    
    createElement(html) {
        const temp = document.createElement('div');
        temp.innerHTML = html.trim();
        return temp.firstChild;
    }
};

// 2. Advanced Animations
const Animations = {
    fadeIn(element, duration = 300) {
        element.style.opacity = '0';
        element.style.transition = `opacity ${duration}ms ease-in`;
        setTimeout(() => element.style.opacity = '1', 10);
    },
    
    slideDown(element, duration = 300) {
        element.style.maxHeight = '0';
        element.style.overflow = 'hidden';
        element.style.transition = `max-height ${duration}ms ease-out`;
        setTimeout(() => element.style.maxHeight = element.scrollHeight + 'px', 10);
    },
    
    slideUp(element, duration = 300) {
        element.style.transition = `max-height ${duration}ms ease-in`;
        element.style.maxHeight = '0';
    },
    
    shake(element) {
        element.classList.add('animate-bounce');
        setTimeout(() => element.classList.remove('animate-bounce'), 600);
    },
    
    pulse(element) {
        element.style.animation = 'pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite';
    },
    
    rotateIn(element) {
        element.style.animation = 'rotateIn 0.6s ease-out';
    }
};

// 3. Smart Alert System
const AlertManager = {
    alerts: [],
    
    show(message, type = 'info', duration = 4000) {
        const id = Date.now();
        const alertHTML = `
            <div class="fixed top-6 right-6 max-w-md z-50 animate-slide-in-right" id="alert-${id}">
                <div class="bg-gradient-to-r from-${type === 'success' ? 'green' : type === 'error' ? 'red' : 'blue'}-500/20 to-${type === 'success' ? 'green' : type === 'error' ? 'red' : 'blue'}-600/10 border border-${type === 'success' ? 'green' : type === 'error' ? 'red' : 'blue'}-500/50 rounded-lg p-4 flex items-start gap-3 backdrop-blur-sm shadow-lg">
                    <div class="flex-shrink-0 pt-0.5">
                        ${type === 'success' ? '<svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>' : type === 'error' ? '<svg class="w-5 h-5 text-red-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/></svg>' : '<svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2z" clip-rule="evenodd"/></svg>'}
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-${type === 'success' ? 'green' : type === 'error' ? 'red' : 'blue'}-200">${message}</p>
                    </div>
                    <button onclick="document.getElementById('alert-${id}').remove()" class="text-gray-400 hover:text-gray-300 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                    </button>
                </div>
            </div>
        `;
        
        const alert = Utils.createElement(alertHTML);
        document.body.appendChild(alert);
        
        if (duration > 0) {
            setTimeout(() => {
                alert.style.animation = 'slideOut 0.3s ease-in forwards';
                setTimeout(() => alert.remove(), 300);
            }, duration);
        }
    },
    
    success(message) { this.show(message, 'success'); },
    error(message) { this.show(message, 'error'); },
    info(message) { this.show(message, 'info'); }
};
window.AlertManager = AlertManager;

// 4. Modal System
const Modal = {
    open(title, content, options = {}) {
        const modalHTML = `
            <div class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 backdrop-blur-sm" id="modal-overlay">
                <div class="bg-gray-800 rounded-xl shadow-2xl max-w-md w-full mx-4 border border-gray-700 animate-scale-up">
                    <div class="flex items-center justify-between p-6 border-b border-gray-700">
                        <h3 class="text-lg font-semibold text-white">${title}</h3>
                        <button onclick="Modal.close()" class="text-gray-400 hover:text-gray-300 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-6 text-gray-300">${content}</div>
                    <div class="flex items-center justify-end gap-3 p-6 border-t border-gray-700">
                        <button onclick="Modal.close()" class="px-4 py-2 rounded-lg bg-gray-700 hover:bg-gray-600 text-white transition">Cancel</button>
                        ${options.confirmText ? `<button onclick="${options.onConfirm || 'Modal.close()'}" class="px-4 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white transition">${options.confirmText}</button>` : ''}
                    </div>
                </div>
            </div>
        `;
        
        const modal = Utils.createElement(modalHTML);
        document.body.appendChild(modal);
        
        document.getElementById('modal-overlay').addEventListener('click', (e) => {
            if (e.target.id === 'modal-overlay') Modal.close();
        });
    },
    
    close() {
        const overlay = document.getElementById('modal-overlay');
        if (overlay) {
            overlay.style.animation = 'fadeOut 0.3s ease-out forwards';
            setTimeout(() => overlay.remove(), 300);
        }
    }
};
window.Modal = Modal;

// 5. Scroll to Top Button
function initScrollToTop() {
    const btn = Utils.createElement(`
        <button id="scroll-top" class="fixed bottom-8 right-8 bg-indigo-600 hover:bg-indigo-700 text-white p-3 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 z-40" title="Scroll to top">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
            </svg>
        </button>
    `);
    
    document.body.appendChild(btn);
    
    window.addEventListener('scroll', Utils.throttle(() => {
        if (window.scrollY > 300) {
            btn.classList.remove('opacity-0', 'invisible');
        } else {
            btn.classList.add('opacity-0', 'invisible');
        }
    }, 100));
    
    btn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

// 6. Parallax Effect
function initParallax() {
    const parallaxElements = document.querySelectorAll('[data-parallax]');
    
    if (parallaxElements.length === 0) return;
    
    window.addEventListener('scroll', Utils.throttle(() => {
        parallaxElements.forEach(el => {
            const speed = el.getAttribute('data-parallax') || 0.5;
            el.style.transform = `translateY(${window.scrollY * speed}px)`;
        });
    }, 16));
}

// 7. Intersection Observer for Animations
function initIntersectionObserver() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    document.querySelectorAll('[data-animate]').forEach(el => {
        observer.observe(el);
    });
}

// 8. Mobile Menu Toggle
function initMobileMenu() {
    const menuButton = document.querySelector('[data-mobile-menu-toggle]');
    const menu = document.querySelector('[data-mobile-menu]');
    
    if (!menuButton || !menu) return;
    
    menuButton.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        menuButton.classList.toggle('active');
    });
}

// 9. Form Enhancement
function enhanceForms() {
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="inline-block animate-spin">⏳</span> Processing...';
            }
        });
    });
}

// 10. Table Enhancements
function enhanceTables() {
    document.querySelectorAll('table').forEach(table => {
        // Stripe rows
        table.querySelectorAll('tbody tr').forEach((row, index) => {
            if (index % 2 === 0) {
                row.classList.add('bg-gray-800/20');
            }
        });
        
        // Hover effects
        table.querySelectorAll('tbody tr').forEach(row => {
            row.addEventListener('mouseenter', function() {
                this.classList.add('bg-indigo-500/10');
            });
            row.addEventListener('mouseleave', function() {
                this.classList.remove('bg-indigo-500/10');
            });
        });
    });
}

// 11. Link Animation
function initLinkAnimations() {
    document.querySelectorAll('a:not([data-no-animation])').forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.transition = 'all 0.3s ease';
            this.style.transform = 'translateX(2px)';
        });
        link.addEventListener('mouseleave', function() {
            this.style.transform = 'translateX(0)';
        });
    });
}

// 12. Keyboard Navigation
function initKeyboardNavigation() {
    document.addEventListener('keydown', (e) => {
        // Ctrl+K for quick search
        if (e.ctrlKey && e.key === 'k') {
            e.preventDefault();
            AlertManager.info('Search feature can be implemented here');
        }
        
        // Alt+L for logout
        if (e.altKey && e.key === 'l') {
            e.preventDefault();
            const logoutForm = document.querySelector('form[action*="logout"]');
            if (logoutForm) logoutForm.submit();
        }
    });
}

// 13. CSS Animations
const style = document.createElement('style');
style.textContent = `
    @keyframes slide-in-right {
        from {
            opacity: 0;
            transform: translateX(100px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes scale-up {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }
    
    @keyframes fade-in {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
    @keyframes fade-out {
        from {
            opacity: 1;
        }
        to {
            opacity: 0;
        }
    }
    
    @keyframes slide-out {
        to {
            opacity: 0;
            transform: translateX(100px);
        }
    }
    
    .animate-slide-in-right {
        animation: slide-in-right 0.3s ease-out;
    }
    
    .animate-scale-up {
        animation: scale-up 0.3s ease-out;
    }
    
    .animate-fade-in {
        animation: fade-in 0.6s ease-out;
    }
    
    .smooth-scroll {
        scroll-behavior: smooth;
    }
`;
document.head.appendChild(style);

// 14. Initialize All Features
document.addEventListener('DOMContentLoaded', () => {
    initScrollToTop();
    initParallax();
    initIntersectionObserver();
    initMobileMenu();
    enhanceForms();
    enhanceTables();
    initLinkAnimations();
    initKeyboardNavigation();
    
    console.log('✅ Advanced App.js loaded with all features enabled');
});

// Global Exports
window.Utils = Utils;
window.Animations = Animations;
