<template>
  <Section
    title-upper="Work"
    title-lower="Experience"
  >
    <div class="section-content">
      <div class="timeline is-centered">
        <header class="timeline-header">
          <span class="tag is-medium is-primary">Today</span>
        </header>
        <TimelineItem
          v-for="(job, idx) in jobs"
          :key="idx"
          :date="job.date"
          :job-title="job.title"
          :img="job.img"
          :img-alt="job.alt"
          :responsibilities="job.responsibilities"
          :tags="job.tags"
        />
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
  },
  data() {
    return {
      jobs: [
        {
          date: "December 2020",
          title: "Neilson - Application Support Analyst",
          img: "/images/neilson.png",
          alt: "Neilson",
          tags: ['SQL','Windows AD','Vue'],
          // responsibilities: [
          //   'Create bespoke reports using SQL for stakeholders and managing SSRS reports.',
          //   'Troubleshoot both the applications client UI and backend database related issues.',
          // ]
        },
        {
          date: "November 2017",
          title: "Advanced - Application Delivery Specialist",
          img: "/images/advanced.jpg",
          alt: "advanced",
          tags: ['SQL','IIS','Windows Server','Linux','Octopus','NodeJS'],
          // responsibilities: [
          //   'Provide third line support for Carenotes (ASP NET Application)',
          //   'Deploy and upgrade the Carenotes Application (Windows and Linux Servers)',
          //   'Install and use monitoring tools such as New Relic and App Dynamics',
          //   'Install external modules such as the Patient Dashboard (Node JS Application on Red Hat Servers)',
          //   'Write complex SQL scripts to resolve data issues'
          // ]
        },
        {
          date: "June 2017",
          title: "Advanced - Service Desk Analyst",
          img: "/images/advanced.jpg",
          alt: "advanced",
          tags: ['SQL','Support','Training']
          // responsibilities: [
          //   'Deal with customer escalations',
          //   'Attend internal and external conference calls, such as Go To Market calls',
          //   'Provide training to the first and second line teams'
          // ]
        },
        {
          date: "September 2016",
          title: "Advanced - Second Line Community Technician",
          img: "/images/advanced.jpg",
          alt: "advanced",
          tags: ['Support','SQL']
          // responsibilities: [
          //   'Answer customer queries via phone and email',
          //   'Work with the development team to triage issues',
          //   'Write and test SQL scripts to resolve issues'
          // ]
        },
        {
          date: "April 2016",
          title: "Advanced - First Line Support Technician",
          img: "/images/advanced.jpg",
          alt: "advanced",
          tags: ['Windows AD']
          // responsibilities: [
          //   'Answer customer queries via phone and email',
          //   'Create and manage Active Directory accounts'
          // ]
        },
      //   { 
      //     date: "September 2013",
      //     title: "Xpress Games - Business Administration Apprentice",
      //     img: "/images/xpg.jpg",
      //     alt: "xpg",
      //     responsibilities: [
      //       'Maintain database of stock held within the store',
      //       'Study towards all apprenticeship modules including communication in business environment'
      //     ]
      //   }
      ]
    };
  },
};
</script>
