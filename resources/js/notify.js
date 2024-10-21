export function createToast(type = "info", title = "", text = "") {
    let notifications = document.querySelector('.notifications');
    if (!notifications) {
        notifications = document.createElement("div");
        notifications.classList = "notifications fixed top-8 right-12 z-[99999]";
        document.body.appendChild(notifications);
    }

    let newToast = document.createElement('div');

    var icon = {
        "success": "fa-solid fa-circle-check",
        "error": "fa-solid fa-circle-exclamation",
        "warning": "fa-solid fa-circle-exclamation",
        "info": "fa-solid fa-circle-info",
    };

    let iconClass = icon[type] || "fa-solid fa-circle-exclamation";


    var typeClasses = {
        "success": "bg-gradient-to-r from-green-300/50 to-gray-800/90 border-l-4 border-green-500",
        "error": "bg-gradient-to-r from-red-300/50 to-gray-800/90 border-l-4 border-red-500",
        "warning": "bg-gradient-to-r from-yellow-300/50 to-gray-800/90 border-l-4 border-yellow-500",
        "info": "bg-gradient-to-r from-blue-300/50 to-gray-800/90 border-l-4 border-blue-500"
    };

    let toastTypeClass = typeClasses[type] || typeClasses["info"];

    newToast.innerHTML = `
    <div class="toster ${toastTypeClass} relative text-white p-4 rounded-md flex items-center justify-between mb-4 animate-slideIn">
        <div class="icon text-xl mr-4">
            <i class="${iconClass}"></i>
        </div>
        <div class="tosterHeading flex-1 mr-4">
            <h1 class="text-lg font-semibold">${title}</h1>
            <p class="text-sm">${text}</p>
        </div>
        <i class="fa-solid fa-xmark cursor-pointer" onclick="this.parentElement.remove()"></i>
        <div class="absolute bottom-0 left-0 right-0 h-1 animate-progressBar"></div>
    </div>`;

    notifications.append(newToast);

    setTimeout(() => newToast.remove(), 5000);
}
