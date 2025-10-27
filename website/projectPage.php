<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include '../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/ibemCss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/png" href="../images/ibemFavicon.png">
    <title>Projects</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #000;
            color: white;
        }

        .project-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-top: 5%;
            padding: 40px;
            gap: 40px;
        }

        .projects-list {
            flex: 1;
            background-color: #111;
            border-radius: 10px;
            padding: 20px;
            min-height: 400px;
        }

        .projects-list h3 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
        }

        .post {
            background-color: #1f1f1f;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 15px;
            display: flex;
            gap: 15px;
            align-items: flex-start;
            position: relative;
            transition: 0.3s;
        }

        .pinned {
            border: 2px solid #24fa41b4;
            box-shadow: 0 0 10px #24fa41b4;
        }

        .post img {
            width: 120px;
            height: auto;
            border-radius: 10px;
            flex-shrink: 0;
        }

        .post-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .post-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .post-header h3 {
            color: #24fa41b4;
            margin: 0;
            font-size: 1.2rem;
        }

        .delete-btn, .update-btn, .pin-btn {
            border: none;
            padding: 6px 10px;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            transition: background 0.3s;
        }

        .delete-btn {
            background-color: #e02424;
        }

        .delete-btn:hover {
            background-color: #c51b1b;
        }

        .update-btn {
            background-color: #007bff;
            margin-left: 5px;
        }

        .update-btn:hover {
            background-color: #0056b3;
        }

        .pin-btn {
            background-color: transparent;
            color: #24fa41b4;
            font-size: 1.2rem;
            margin-right: 8px;
        }

        .pin-btn:hover {
            color: #1e7e34;
        }

        .post p {
            margin-top: 8px;
            color: #ddd;
            font-size: 0.95rem;
        }

        .add-project {
            flex: 0.8;
            background-color: #111;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #toggleFormBtn {
            background-color: #24fa41b4;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
            cursor: pointer;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        #toggleFormBtn:hover {
            background-color: #1e7e34;
        }

        .form-popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #111;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px #24fa41b4;
            z-index: 1000;
            width: 350px;
            flex-direction: column;
        }

        .form-popup input,
        .form-popup textarea,
        .form-popup button {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            border: none;
        }

        .form-popup button {
            background-color: #24fa41b4;
            color: white;
            cursor: pointer;
        }

        .form-popup button:hover {
            background-color: #1e7e34;
        }

        .form-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 999;
        }
    </style>
</head>
<body>
    <header>
        <?php include 'components/profPopUp.php'; ?>
        <a href="mainPage.php" class="logo">Ibem</a>
        <nav>
            <a href="mainPage.php">Home</a>
            <a href="skillsPage.php">Skills</a>
            <a href="projectPage.php" class="active">Project</a>
            <a href="aboutmePage.php">About Me</a>
        </nav>
    </header>

    <main class="project-container">
        <section class="projects-list">
            <h3><span>PROJECTS</span></h3>
            <div id="postList"></div>
        </section>

        <section class="add-project">
            <button id="toggleFormBtn">Add Project</button>
        </section>

        <!-- Add Project -->
        <div class="form-overlay" id="formOverlay"></div>
        <div class="form-popup" id="formContainer">
            <h2 style="text-align:center; margin-bottom:10px;"><span>Add Project</span></h2>
            <form id="projectForm" enctype="multipart/form-data">
                <input type="text" name="title" id="title" placeholder="Enter project title" required>
                <textarea name="content" id="content" placeholder="Describe your project..." required></textarea>
                <input type="file" name="image" accept="image/*">
                <button type="submit">Save Project</button>
            </form>
        </div>

        <!-- Update Project -->
        <div class="form-overlay" id="updateOverlay"></div>
        <div class="form-popup" id="updateContainer">
            <h2 style="text-align:center; margin-bottom:10px;"><span>Update Project</span></h2>
            <form id="updateForm" enctype="multipart/form-data">
                <input type="hidden" name="id" id="update_id">
                <input type="text" name="title" id="update_title" placeholder="Project Title" required>
                <textarea name="description" id="update_description" placeholder="Project Description" required></textarea>
                <input type="file" name="image" accept="image/*">
                <button type="submit">Save Changes</button>
            </form>
        </div>
    </main>

    <script>
        // Load all projects
        function loadProjects() {
            fetch("../admin/controller/fetch_project.php")
                .then(res => res.json())
                .then(data => {
                    const postList = document.getElementById("postList");
                    postList.innerHTML = "";
                    if (data.length === 0) {
                        postList.innerHTML = "<p style='text-align:center;'>No projects yet.</p>";
                        return;
                    }

                    data.forEach(proj => {
                        const div = document.createElement("div");
                        div.classList.add("post");
                        if (proj.pinned === 1) div.classList.add("pinned");

                        div.innerHTML = `
                          <img src="../${proj.image_path ? proj.image_path : 'uploads/default_project.png'}" alt="Project Image">
                            <div class="post-content">
                                <div class="post-header">
                                    <h3>${proj.title}</h3>
                                    <div>
                                        <button class="pin-btn" onclick="togglePin(${proj.id}, ${proj.pinned})" title="${proj.pinned ? 'Unpin Project' : 'Pin Project'}">
                                            <i class="fa-solid fa-thumbtack ${proj.pinned ? 'fa-rotate-45' : ''}"></i>
                                        </button>
                                        <button class="update-btn" onclick="openUpdateForm(${proj.id}, '${proj.title}', \`${proj.description}\`)">Update</button>
                                        <button class="delete-btn" onclick="deleteProject(${proj.id})">Delete</button>
                                    </div>
                                </div>
                                <p>${proj.description}</p>
                            </div>
                        `;
                        postList.appendChild(div);
                    });
                })
                .catch(err => console.error("Fetch error:", err));
        }

        // Toggle pin
        function togglePin(id, currentState) {
            const newState = currentState === 1 ? 0 : 1;
            fetch("../admin/controller/toggle_pin.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: `id=${id}&pinned=${newState}`
            })
            .then(res => res.text())
            .then(data => {
                if (data.trim() === "success") {
                    loadProjects();
                } else {
                    alert("⚠️ Failed to pin/unpin: " + data);
                }
            })
            .catch(err => console.error("Pin error:", err));
        }

        // Existing Add/Update/Delete functions
        const toggleBtn = document.getElementById("toggleFormBtn");
        const overlay = document.getElementById("formOverlay");
        const popup = document.getElementById("formContainer");

        toggleBtn.addEventListener("click", () => {
            overlay.style.display = "block";
            popup.style.display = "flex";
        });

        overlay.addEventListener("click", () => {
            overlay.style.display = "none";
            popup.style.display = "none";
        });

        document.getElementById("projectForm").addEventListener("submit", function(e) {
            e.preventDefault();
            const formData = new FormData(this);

            fetch("../admin/controller/add_project.php", {
                method: "POST",
                body: formData
            })
            .then(res => res.text())
            .then(data => {
                if (data.trim() === "success") {
                    alert("✅ Project added successfully!");
                    overlay.style.display = "none";
                    popup.style.display = "none";
                    this.reset();
                    loadProjects();
                } else {
                    alert("⚠️ Failed: " + data);
                }
            })
            .catch(err => console.error("Add project error:", err));
        });

        function deleteProject(id) {
            if (!confirm("Are you sure you want to delete this project?")) return;

            fetch("../admin/controller/delete_project.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: "id=" + id
            })
            .then(res => res.text())
            .then(data => {
                if (data.trim() === "deleted") {
                    alert("🗑️ Project deleted successfully!");
                    loadProjects();
                } else {
                    alert("Delete failed: " + data);
                }
            })
            .catch(err => console.error("Delete error:", err));
        }

        function openUpdateForm(id, title, description) {
            document.getElementById("update_id").value = id;
            document.getElementById("update_title").value = title;
            document.getElementById("update_description").value = description;
            document.getElementById("updateOverlay").style.display = "block";
            document.getElementById("updateContainer").style.display = "flex";
        }

        document.getElementById("updateOverlay").addEventListener("click", () => {
            document.getElementById("updateOverlay").style.display = "none";
            document.getElementById("updateContainer").style.display = "none";
        });

        document.getElementById("updateForm").addEventListener("submit", function(e) {
            e.preventDefault();
            const formData = new FormData(this);

            fetch("../admin/controller/update_project.php", {
                method: "POST",
                body: formData
            })
            .then(res => res.text())
            .then(data => {
                if (data.trim() === "updated") {
                    alert("✅ Project updated successfully!");
                    document.getElementById("updateOverlay").style.display = "none";
                    document.getElementById("updateContainer").style.display = "none";
                    loadProjects();
                } else {
                    alert("⚠️ Update failed: " + data);
                }
            })
            .catch(err => console.error("Update error:", err));
        });

        window.onload = loadProjects;
    </script>
</body>
</html>
