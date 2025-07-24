document.addEventListener("DOMContentLoaded", function () {
    const levelSelect = document.querySelector(".level-select");

    levelSelect.addEventListener("change", function () {
        const selectedLevelId = this.value;

        // 値が選択されている場合のみリダイレクト
        if (selectedLevelId) {
            window.location.href = `/quiz/${selectedLevelId}`;
        }
    });
});
