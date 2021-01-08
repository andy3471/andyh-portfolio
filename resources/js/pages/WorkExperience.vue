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
          <div class="tags">
            <span class="tag">SQL</span>
            <span class="tag">Windows AD</span>
          </div>
        </TimelineItem>

        <TimelineItem
          date="November 2017"
          jobTitle="Advanced - Application Delivery Specialist"
          img="/images/advanced.jpg"
          imgAlt="advanced"
        >
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
          <div class="tags">
            <span class="tag">SQL</span>
            <span class="tag">IIS</span>
            <span class="tag">NodeJS</span>
          </div>
        </TimelineItem>

        <TimelineItem
          date="June 2017"
          jobTitle="Advanced - Service Desk Analyst"
          img="/images/advanced.jpg"
          imgAlt="advanced"
        >
          <ul>
            <li>Deal with customer escalations</li>
            <li>
              Attend internal and external conference calls, such as Go To
              Market calls
            </li>
            <li>Provide training to the first and second line teams</li>
          </ul>
        </TimelineItem>

        <TimelineItem
          date="September 2016"
          jobTitle="Advanced - Second Line Community Technician"
          img="/images/advanced.jpg"
          imgAlt="advanced"
        >
          <ul>
            <li>Answer customer queries via phone and email</li>
            <li>Work with the development team to triage issues</li>
            <li>Write and test SQL scripts to resolve issues</li>
          </ul>
        </TimelineItem>

        <TimelineItem
          date="April 2016"
          jobTitle="Advanced - First Line Support Technician"
          img="/images/advanced.jpg"
          imgAlt="advanced"
        >
          <ul>
            <li>Answer customer queries via phone and email</li>
            <li>Create and manage Active Directory accounts</li>
          </ul>
        </TimelineItem>

        <TimelineItem
          date="September 2013"
          jobTitle="Xpress Games - Business Administration Apprentice"
          img="/images/xpg.jpg"
          imgAlt="xpg"
        >
          <ul>
            <li>Maintain database of stock held within the store</li>
            <li>
              Study towards all apprenticeship modules including communication
              in business environment
            </li>
          </ul>
        </TimelineItem>

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
