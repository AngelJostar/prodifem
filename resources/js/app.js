import Alpine from 'alpinejs';

Alpine.data('specialtyTabs', () => ({
    active: 0,

    navigate(event) {
        const tabs = Array.from(event.currentTarget.querySelectorAll('[role="tab"]'));
        const current = tabs.indexOf(event.target);
        if (current < 0) return;

        const destinations = {
            ArrowRight: (current + 1) % tabs.length,
            ArrowLeft: (current - 1 + tabs.length) % tabs.length,
            Home: 0,
            End: tabs.length - 1,
        };

        if (!Object.hasOwn(destinations, event.key)) return;

        event.preventDefault();
        this.active = destinations[event.key];
        tabs[this.active].focus();
    },
}));

window.Alpine = Alpine;
Alpine.start();
