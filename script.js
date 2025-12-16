// 1. YOUR JOB DATABASE
// Add new jobs here. The site will update automatically.
const jobs = [
    {
        title: "Digital Marketing Executive",
        company: "Siliguri Ad Agency",
        location: "Siliguri, West Bengal",
        type: "Full-Time",
        link: "mailto:hrs.team.a@gmail.com?subject=Application: Digital Marketing"
    },
    {
        title: "Remote Graphics Designer",
        company: "GFDA Inspired Studio",
        location: "Remote",
        type: "Contract",
        link: "mailto:hrs.team.a@gmail.com?subject=Application: Graphics Designer"
    },
    {
        title: "Front-End Developer (HTML/CSS)",
        company: "TechHub North Bengal",
        location: "Siliguri (Pradhan Nagar)",
        type: "Full-Time",
        link: "mailto:hrs.team.a@gmail.com?subject=Application: Front-End Dev"
    }
];

// 2. CORE FUNCTIONS
const jobContainer = document.getElementById('jobList');
const searchInput = document.getElementById('jobSearch');

// Function to display jobs
function displayJobs(jobsToRender) {
    jobContainer.innerHTML = ''; // Clear current list

    if (jobsToRender.length === 0) {
        jobContainer.innerHTML = `<p class="no-results">No jobs found. Try "Remote" or "Siliguri".</p>`;
        return;
    }

    jobsToRender.forEach(job => {
        const card = document.createElement('div');
        card.className = `job-card ${job.location.includes('Remote') ? 'featured' : ''}`;
        
        card.innerHTML = `
            <div class="job-info">
                <h3>${job.title}</h3>
                <p class="company">${job.company}</p>
                <span class="location">📍 ${job.location} | <strong>${job.type}</strong></span>
            </div>
            <a href="${job.link}" class="apply-btn">APPLY NOW</a>
        `;
        jobContainer.appendChild(card);
    });
}

// 3. SEARCH LOGIC (Instant Filter)
searchInput.addEventListener('input', (e) => {
    const searchTerm = e.target.value.toLowerCase();
    
    const filteredJobs = jobs.filter(job => 
        job.title.toLowerCase().includes(searchTerm) || 
        job.company.toLowerCase().includes(searchTerm) ||
        job.location.toLowerCase().includes(searchTerm)
    );
    
    displayJobs(filteredJobs);
});

// Initialize the board on load
window.onload = () => displayJobs(jobs);
