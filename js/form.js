$(function(){function t(t){"success"==t.result?($("#form-c>.row").hide(),$("#success_message").show(),$("#error_message").hide()):"failed"==t.result?($("#success_message").hide(),$("#error_message").show(),$('button[type="button"]',$form).each(function(){$btn=$(this),label=$btn.prop("orig_label"),label&&($btn.prop("type","submit"),$btn.text(label),$btn.prop("orig_label",""))})):alert("Error")}$("#form-c").submit(function(e){e.preventDefault(),$form=$(this),$('button[type="submit"]',$form).each(function(){$btn=$(this),$btn.prop("type","button"),$btn.prop("orig_label",$btn.text()),$btn.text("Sending ...")}),$.ajax({type:"POST",url:"contact.php",data:$form.serialize(),success:t,dataType:"json"})})});
