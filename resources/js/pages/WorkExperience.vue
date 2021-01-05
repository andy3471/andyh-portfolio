<template>
  <Section titleUpper="Work" titleLower="Experience">
    <div class="section-content">
      <div class="timeline is-centered">
        <header class="timeline-header">
          <span class="tag is-medium is-primary">Today</span>
        </header>
        <TimelineItem
          date="December 2020"
          jobTitle="Neilson - Application Support Analyst"
          img="/images/neilson.png"
          imgAlt="Neilson"
        >
          <ul>
            <li>
              Create bespoke reports using SQL for stakeholders and managing
              SSRS reports.
            </li>
            <li>
              Troubleshoot both the applications client UI and backend database
              related issues
            </li>
          </ul>
        </TimelineItem>
        <div class="timeline-item is-warning">
          <div class="timeline-marker is-warning is-image is-32x32">
            <img src="/images/advanced.jpg" alt="advanced" />
          </div>
          <div class="timeline-content">
            <p class="heading">November 2017</p>
            <p>Advanced - Application Delivery Specialist</p>
            <ul>
              <li>
                Provide third line support for Carenotes (ASP NET Application)
              </li>
              <li>
                Deploy and upgrade the Carenotes Application (Windows and Linux
                Servers)
              </li>
              <li>
                Install and use monitoring tools such as New Relic and App
                Dynamics
              </li>
              <li>
                Install external modules such as the Patient Dashboard (Node JS
                Application on Red Hat Servers)
              </li>
              <li>Write complex SQL scripts to resolve data issues</li>
            </ul>
          </div>
        </div>
        <div class="timeline-item is-warning">
          <div class="timeline-marker is-warning is-image is-32x32">
            <img src="/images/advanced.jpg" alt="advanced" />
          </div>
          <div class="timeline-content">
            <p class="heading">June 2017</p>
            <p>Advanced - Service Desk Analyst</p>
            <ul>
              <li>Deal with customer escalations</li>
              <li>
                Attend internal and external conference calls, such as Go To
                Market calls
              </li>
              <li>Provide training to the first and second line teams</li>
            </ul>
          </div>
        </div>
        <div class="timeline-item is-warning">
          <div class="timeline-marker is-warning is-image is-32x32">
            <img src="/images/advanced.jpg" alt="advanced" />
          </div>
          <div class="timeline-content">
            <p class="heading">September 2016</p>
            <p>Advanced - Second Line Community Technician</p>
            <ul>
              <li>Answer customer queries via phone and email</li>
              <li>Work with the development team to triage issues</li>
              <li>Write and test SQL scripts to resolve issues</li>
            </ul>
          </div>
        </div>
        <div class="timeline-item is-primary">
          <div class="timeline-marker is-warning is-image is-32x32">
            <img src="/images/advanced.jpg" alt="advanced" />
          </div>
          <div class="timeline-content">
            <p class="heading">April 2016</p>
            <p>Advanced - First Line Support Technician</p>
            <ul>
              <li>Answer customer queries via phone and email</li>
              <li>Create and manage Active Directory accounts</li>
            </ul>
          </div>
        </div>
        <div class="timeline-item is-primary">
          <div class="timeline-marker is-warning is-image is-32x32">
            <img src="/images/xpg.jpg" alt="xpg" />
          </div>
          <div class="timeline-content">
            <p class="heading">September 2013</p>
            <p>Xpress Games - Business Administration Apprentice</p>
            <ul>
              <li>Maintain database of stock held within the store</li>
              <li>
                Study towards all apprenticeship modules including communication
                in business environment
              </li>
            </ul>
          </div>
        </div>
        <header class="timeline-header">
          <span class="tag is-medium is-primary">2013</span>
        </header>
      </div>
    </div>
  </Section>
</template>
<script>
import Section from "../components/Section.vue";
import TimelineItem from "../components/TimelineItem.vue";

export default {
  name: "WorkExperience",
  components: {
    Section,
    TimelineItem
  }
};
</script>
