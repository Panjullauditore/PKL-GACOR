export default () => ({
    init() {
        Alpine.store('darkMode', {
            on: localStorage.theme === 'dark' || 
                (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches),

            toggle() {
                this.on = !this.on;
                localStorage.theme = this.on ? 'dark' : 'light';
                
                if (this.on) {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            }
        });

        // Set initial dark mode state
        if (Alpine.store('darkMode').on) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    }
});