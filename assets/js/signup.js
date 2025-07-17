document.addEventListener('DOMContentLoaded', function () {
    const roleSelect = document.getElementById('role');
    const influencerFields = document.getElementById('influencer-fields');
    const subscriberFields = document.getElementById('subscriber-fields');
    const agencyFields = document.getElementById('agency-fields');

    function hideAllFields() {
        influencerFields.style.display = 'none';
        subscriberFields.style.display = 'none';
        agencyFields.style.display = 'none';
    }

    hideAllFields();

    roleSelect.addEventListener('change', function () {
        hideAllFields();
        if (this.value === 'influencer') influencerFields.style.display = 'block';
        if (this.value === 'subscriber') subscriberFields.style.display = 'block';
        if (this.value === 'agency') agencyFields.style.display = 'block';
    });
});
