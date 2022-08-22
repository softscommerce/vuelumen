<template>
   <div>
        <label class="form-label mb-2">DCDS</label>
        <search-select
          v-model="selectedSoldier"
          :options="soldiers"
          :filter-function="applySearchFilter"
        ></search-select>
   </div>
    
</template>

<script>
   export default{

       data() {
    return {
      selectedSoldier: null,
      search: "",
      soldiers: [
        "1LT Lakes, Dale",
        "1LT Ball, Michael",
        "CW3 Latane, Paul",
        "SFC Busby, Ryan",
        "SSG Salinas, Ricky",
        "SSG Hochheimer, Steven",
        "SSG Fossett, Matt",
        "SSG Sabatini, Jesse",
        "SSG jackson, Jeremy"
      ]
    }
  },
  methods: {
    applySearchFilter(search, soldiers) {
      return soldiers.filter((soldier) =>
        soldier.toLowerCase().startsWith(search.toLowerCase())
      )
    }
  }
   }
</script>