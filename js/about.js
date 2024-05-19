document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function() {
        var skillLevels = document.querySelectorAll('.skill-level');

        skillLevels.forEach(function (skillLevel) {
            var level = skillLevel.getAttribute('data-skill-level');
            skillLevel.style.width = level;
        });
    }, 100);
});