<div class="container col-md-12 col-sm-12" id="contenedor_1" onload="cargarDatos()">
<div class="row">
  <div class="col-sm-6 col-md-6">
      <div class="table-responsive table">
      <div class="box">
        <table class="table table-bordered table-condensed tab-content">
          <tr style="text-align: center;" id="6">
              <?php foreach ($query as $data): ?>
                <td id="1"><span class="fa fa-car"><input type="hidden" class="datos" value="<?php echo $data['snr_estado']?>"></span><p>1</p></td>
              <?php endforeach; ?>
            <td><span class="fa fa-car"></span><p>2</p></td>  
            <td><span class="fa fa-car"></span><p>3</p></td>

              <?php foreach ($query3 as $data3): ?>
                <td id="3"><span class="fa fa-car"><input type="hidden" class="datos3" value="<?php echo $data3['snr_estado']?>"></span><p>4</p></td>
              <?php endforeach; ?>
              
            <td><span class="fa fa-car"></span><p>5</p></td>
            <td><span class="fa fa-car"></span><p>6</p></td>
            <td><span class="fa fa-car"></span><p>7</p></td>
            <td><span class="fa fa-car"></span><p>8</p></td>
            <td><span class="fa fa-car"></span><p>9</p></td>
            <td><span class="fa fa-car"></span><p>10</p></td>
            <td><span class="fa fa-car"></span><p>11</p></td>
            <td><span class="fa fa-car"></span><p>12</p></td>
            <td><span class="fa fa-car"></span><p>13</p></td>
            <td><span class="fa fa-car"></span><p>14</p></td>
            <td><span class="fa fa-car"><input type="hidden" class="datos6" value="libre"></span><p>15</p></td>
          </tr>
          
        </table>
      </div>
      </div>
    </div>

  <div class="col-sm-6">
    <div class="table-responsive table">
      <div class="box">
        <table class="table table-bordered table-condensed">
          <tr style="text-align: center;" id="5">
            <input type="hidden" class="datos5" value="libre">
            <td id="14"><input type="hidden" class="datos14" value="ocupado"><span class="fa fa-car"></span><p>30</p></td>
            <td><span class="fa fa-car"></span><p>31</p></td>
            <td><span class="fa fa-car"></span><p>32</p></td>
            <td><span class="fa fa-car"></span><p>33</p></td>
            <td><span class="fa fa-car"></span><p>34</p></td>
            <td><span class="fa fa-car"></span><p>35</p></td>
            <td id="15"><input type="hidden" class="datos15" value="ocupado"><span class="fa fa-car"></span><p>36</p></td>
            <td><span class="fa fa-car"></span><p>37</p></td>
            <td><span class="fa fa-car"></span><p>38</p></td>
            <td><span class="fa fa-car"></span><p>39</p></td>
            <td><span class="fa fa-car"></span><p>40</p></td>
            <td id="16"><input type="hidden" class="datos16" value="ocupado"><span class="fa fa-car"></span><p>41</p></td>
            <td><span class="fa fa-car"></span><p>42</p></td>
            <td><span class="fa fa-car"></span><p>43</p></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-6">
    <div class="table-responsive table">
      <div class="box">
        <table class="table table-bordered table-condensed">
          <tr style="text-align: center;" id="7">
            <input type="hidden" class="datos7" value="libre">
            <?php foreach ($query2 as $data2): ?>
                <td id="2"><span class="fa fa-wheelchair"><input type="hidden" class="datos2" value="<?php echo $data2['snr_estado']?>"></span><p>16</p></td>
              <?php endforeach; ?>
            <td><span class="fa fa-wheelchair"></span><p>17</p></td>
            <td><span class="fa fa-wheelchair"></span><p>18</p></td>
            <td><span class="fa fa-wheelchair"></span><p>19</p></td>
            <td><span class="fa fa-wheelchair"></span><p>20</p></td>
            <td><span class="fa fa-wheelchair"></span><p>21</p></td>
            <td><span class="fa fa-wheelchair"></span><p>22</p></td>
            <td id="12"><input type="hidden" class="datos12" value="ocupado"><span class="fa fa-wheelchair"></span><p>23</p></td>
            <td><span class="fa fa-wheelchair"></span><p>24</p></td>
            <td><span class="fa fa-wheelchair"></span><p>25</p></td>
            <td><span class="fa fa-wheelchair"></span><p>26</p></td>
            <td id="13"><input type="hidden" class="datos12" value="ocupado"><span class="fa fa-wheelchair"></span><p>27</p></td>
            <td><span class="fa fa-wheelchair"></span><p>28</p></td>
            <td><span class="fa fa-wheelchair"></span><p>29</p></td>
          </tr>
        </table>
      </div>
    </div>
</div>
  <div class="col-sm-6">
    <div class="table-responsive table">
      <div class="box">
        <table class="table table-bordered table-condensed">
          <tr style="text-align: center;" id="4">
            <input type="hidden" class="datos4" value="libre">
            <td><span class="fa fa-car"></span><p>44</p></td>
            <td><span class="fa fa-car"></span><p>45</p></td>
            <td><span class="fa fa-car"></span><p>46</p></td>
            <td id="17"><span class="fa fa-car"></span><p>47</p></td>
            <td><span class="fa fa-car"></span><p>48</p></td>
            <td><span class="fa fa-car"></span><p>49</p></td>
            <td><span class="fa fa-car"></span><p>50</p></td>
            <td><span class="fa fa-car"></span><p>51</p></td>
            <td id="18"><span class="fa fa-car"></span><p>52</p></td>
            <td><span class="fa fa-car"></span><p>53</p></td>
            <td id="19"><span class="fa fa-car"></span><p>54</p></td>
            <td><span class="fa fa-car"></span><p>55</p></td>
            <td><span class="fa fa-car"></span><p>56</p></td>
            <td><span class="fa fa-car"></span><p>57</p></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-6">
    <div class="table-responsive table">
      <div class="box">
        <table class="table table-bordered table-condensed">
          <tr style="text-align: center;" id="8">
            <input type="hidden" class="datos8" value="libre">
            <td><span class="fa fa-car"></span><p>58</p></td>
            <td><span class="fa fa-car"></span><p>59</p></td>
            <td id="20"><span class="fa fa-car"></span><p>60</p></td>
            <td><span class="fa fa-car"></span><p>61</p></td>
            <td><span class="fa fa-car"></span><p>62</p></td>
            <td><span class="fa fa-car"></span><p>63</p></td>
            <td id="21"><span class="fa fa-car"></span><p>64</p></td>
            <td><span class="fa fa-car"></span><p>65</p></td>
            <td><span class="fa fa-car"></span><p>66</p></td>
            <td><span class="fa fa-car"></span><p>67</p></td>
            <td><span class="fa fa-car"></span><p>68</p></td>
            <td><span class="fa fa-car"></span><p>69</p></td>
            <td id="22"><span class="fa fa-car"></span><p>70</p></td>
            <td><span class="fa fa-car"></span><p>71</p></td>
          </tr>
        </table>
      </div>
    </div>
</div>
  <div class="col-sm-6">
    <div class="table-responsive table">
      <div class="box">
        <table class="table table-bordered table-condensed">
          <tr style="text-align: center;" id="9">
            <input type="hidden" class="datos9" value="libre">
            <td><span class="fa fa-car"></span><p>86</p></td>
            <td><span class="fa fa-car"></span><p>87</p></td>
            <td><span class="fa fa-car"></span><p>88</p></td>
            <td><span class="fa fa-car"></span><p>89</p></td>
            <td><span class="fa fa-car"></span><p>90</p></td>
            <td><span class="fa fa-car"></span><p>91</p></td>
            <td><span class="fa fa-car"></span><p>92</p></td>
            <td><span class="fa fa-car"></span><p>93</p></td>
            <td><span class="fa fa-car"></span><p>94</p></td>
            <td><span class="fa fa-car"></span><p>95</p></td>
            <td><span class="fa fa-car"></span><p>96</p></td>
            <td><span class="fa fa-car"></span><p>97</p></td>
            <td><span class="fa fa-car"></span><p>98</p></td>
            <td><span class="fa fa-car"></span><p>99</p></td>
          </tr>
        </table>
      </div>
    </div></div>
  </div>
  <div class="row">
  <div class="col-sm-6">
    <div class="table-responsive table">
      <div class="box">
        <table class="table table-bordered table-condensed">
          <tr style="text-align: center;" id="10">
            <input type="hidden" class="datos10" value="libre">
            <td><span class="fa fa-car"></span><p>72</p></td>
            <td><span class="fa fa-car"></span><p>73</p></td>
            <td><span class="fa fa-car"></span><p>74</p></td>
            <td><span class="fa fa-car"></span><p>75</p></td>
            <td><span class="fa fa-car"></span><p>76</p></td>
            <td><span class="fa fa-car"></span><p>77</p></td>
            <td><span class="fa fa-car"></span><p>78</p></td>
            <td><span class="fa fa-car"></span><p>79</p></td>
            <td><span class="fa fa-car"></span><p>80</p></td>
            <td><span class="fa fa-car"></span><p>81</p></td>
            <td><span class="fa fa-car"></span><p>82</p></td>
            <td><span class="fa fa-car"></span><p>83</p></td>
            <td><span class="fa fa-car"></span><p>84</p></td>
            <td><span class="fa fa-car"></span><p>85</p></td>
          </tr>
        </table>
      </div>
    </div>
</div>
      
  <div class="col-sm-6">
      <div class="table-responsive table">
      <div class="box">
        <table class="table table-bordered table-condensed">
          <tr style="text-align: center;" id="11">
            <input type="hidden" class="datos11" value="libre">
            <td><span class="fa fa-car"></span><p>100</p></td>
            <td><span class="fa fa-car"></span><p>101</p></td>
            <td><span class="fa fa-car"></span><p>102</p></td>
            <td><span class="fa fa-car"></span><p>103</p></td>
            <td><span class="fa fa-car"></span><p>104</p></td>
            <td><span class="fa fa-car"></span><p>105</p></td>
            <td><span class="fa fa-car"></span><p>106</p></td>
            <td><span class="fa fa-car"></span><p>107</p></td>
            <td><span class="fa fa-car"></span><p>108</p></td>
            <td><span class="fa fa-car"></span><p>109</p></td>
            <td><span class="fa fa-car"></span><p>110</p></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  </div>
</div>

	
	