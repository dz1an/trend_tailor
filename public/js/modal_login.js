document.addEventListener('DOMContentLoaded', () => {
    const designerModalElement = document.getElementById('designerModal');
    const clientModalElement = document.getElementById('clientModal');

    const options = {
        backdrop: 'dynamic',
        backdropClasses: 'bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40',
        closable: true,
        onHide: () => {
            removeBackdrop();
            document.body.style.overflow = 'auto';
            document.body.classList.remove('overflow-hidden');
        }
    };

    const designerModal = new Modal(designerModalElement, options);
    const clientModal = new Modal(clientModalElement, options);

    // Trigger for Designer Modal
    document.querySelector('[data-modal-target="designerModal"]').addEventListener('click', () => {
        designerModal.show();
    });

    // Trigger for Client Modal
    document.querySelector('[data-modal-target="clientModal"]').addEventListener('click', () => {
        clientModal.show();
    });

    // Closer for Designer Modal
    document.querySelector('[data-modal-hide="designerModal"]').addEventListener('click', () => {
        designerModal.hide();
    });

    // Closer for Client Modal
    document.querySelector('[data-modal-hide="clientModal"]').addEventListener('click', () => {
        clientModal.hide();
    });

    function removeBackdrop() {
        const backdrops = document.querySelectorAll('[modal-backdrop]');
        backdrops.forEach(backdrop => backdrop.remove());
    }
});