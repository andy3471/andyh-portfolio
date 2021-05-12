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
            date: "May 2021",
            title: "Bullet Digital Solutions - Laravel Full Stack Developer",
            img: "/images/bullet.png",
            alt: "bullet",
            tags: ['Laravel','Doctrine','Vue']
        },
        {
          date: "December 2020",
          title: "Neilson - Application Support Analyst",
          img: "/images/neilson.png",
          alt: "Neilson",
          tags: ['SQL','Windows AD']
        },
        {
          date: "November 2017",
          title: "Advanced - Application Delivery Specialist",
          img: "/images/advanced.jpg",
          alt: "advanced",
          tags: ['SQL','IIS','Windows Server','Linux','Octopus','NodeJS']
        },
        {
          date: "June 2017",
          title: "Advanced - Service Desk Analyst",
          img: "/images/advanced.jpg",
          alt: "advanced",
          tags: ['SQL','Support','Training']
        },
        {
          date: "September 2016",
          title: "Advanced - Second Line Community Technician",
          img: "/images/advanced.jpg",
          alt: "advanced",
          tags: ['Support','SQL']
        },
        {
          date: "April 2016",
          title: "Advanced - First Line Support Technician",
          img: "/images/advanced.jpg",
          alt: "advanced",
          tags: ['Windows AD']
        }
      ]
    };
  },
};
</script>
